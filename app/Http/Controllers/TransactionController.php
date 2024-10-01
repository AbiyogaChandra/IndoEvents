<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
