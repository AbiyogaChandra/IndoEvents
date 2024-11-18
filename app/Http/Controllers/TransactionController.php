<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\MidtransService;
use Midtrans\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $transactions = $user->transactions()->latest()->paginate(10); // Adjust pagination as needed

        return view(
            'settings.transaction', 
            compact(
                'user', 
                'transactions'
                )
        );
    }

    public function createPayment(string $event_id) 
    {
        $user = Auth::user();
        $event = Event::findOrFail($event_id);
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'transaction_time' => now(),
            'price' => $event->ticket_price
        ]);

        $midtrans = new MidtransService();
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $event->ticket_price, 
            ],
            'customer_details' => [
                'first_name' => $user->profile->display_name,
                'email' => $user->email
            ],
        ];
    
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return response()->json([
            'snapToken' => $snapToken, 
            'transaction' => $transaction,
        ]);
    }

    public function updateTransaction(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        if ($transaction) {
            $transaction->status = 'paid';
            $transaction->save();

            $ticketCode = Str::random(20);
            while (Ticket::where('code', $ticketCode)->exists()) {
                $ticketCode = Str::random(20);
            }
            $qr = QrCode::format('png')->size(512)->generate($ticketCode);
            $qrCodePath = 'qrcodes/' . $ticketCode . '.png';
            Storage::disk('public')->put($qrCodePath, $qr);
            
            $ticket = Ticket::create([
                'code' => $ticketCode,
                'qr_code' => $qrCodePath,
                'user_id' => $transaction->user_id,
                'event_id' => $transaction->event_id,
                'transaction_id' => $transaction->id
            ]);

            return response()->json([
                'message' => 'Transaction updated successfully',
                'code' => $ticketCode,
                'qrCodePath' => asset('storage/' . $qrCodePath),
            ]);
        }

        return response()->json(['message' => 'Transaction not found'], 404);
    }

}
