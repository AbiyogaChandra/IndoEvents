<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\MidtransService;

class TransactionController extends Controller
{
    public function index(string $eventId)
    {
        $transactions = Transaction::where('event_id', $eventId)
                       ->orderBy('created_at', 'desc')
                       ->get();;

        return response()->json([
            'success' => true,
            'message' => 'Transactions List',
            'data' => $transactions
        ], 200);
    }

    public function createPayment(Request $request) 
    {
        /*$validator = Validator::make($request->all(), [
            'user_id' => 'required', 
            'event_id' => 'required',
            'transaction_time' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }*/
        $transaction = Transaction::create([
            'user_id' => 0,
            'event_id' => 1,
            'transaction_time' => now(),
            'price' => 10000
        ]);

        $midtrans = new MidtransService();
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => 10000, 
            ],
            'customer_details' => [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'customer@example.com',
                'phone' => '081234567890',
            ],
        ];
    
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        //return view('event', compact('snapToken', 'transaction'));
        return response()->json(['snapToken' => $snapToken, 'transaction' => $transaction]);
        //$transaction = $midtrans->createTransaction($params);

        //return redirect($transaction->redirect_url);
    }

    public function handleNotification(Request $request)
    {
        $notification = new \Midtrans\Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        if ($transactionStatus == 'capture') {
           
        }

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required', 
            'event_id' => 'required',
            'transaction_time' => 'required',
            'price' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $transaction = Transaction::create([
            'user_id' => $request->user_id, 
            'event_id' => $request->event_id,
            'transaction_time' => $request->transaction_time,
            'price' => $request->price
        ]);
        if($transaction) {
            return response()->json([
                'success' => true,
                'message' => 'Transaction Created',
                'data' => $transaction
            ], 201);
        }
        return response()->json([
            'success' => false,
            'message' => 'Transaction Failed to Save',
        ], 409);
    }
}
