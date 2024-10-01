<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index(string $eventId)
    {
        $reviews = Review::where('event_id', $eventId)
                       ->orderBy('created_at', 'desc')
                       ->get();;

        return response()->json([
            'success' => true,
            'message' => 'Reviews List',
            'data' => $reviews
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required', 
            'event_id' => 'required',
            'score' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $review = Review::create([
            'user_id' => $request->user_id, 
            'event_id' => $request->event_id,
            'score' => $request->score
        ]);
        if($review) {
            return response()->json([
                'success' => true,
                'message' => 'Review Created',
                'data' => $review
            ], 201);
        }
        return response()->json([
            'success' => false,
            'message' => 'Review Failed to Save',
        ], 409);
    }

    public function update(Request $request, Review $review)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required', 
            'event_id' => 'required',
            'score' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $review = Review::findOrFail($review->id);
        if($review) {
            $review->update([
                'user_id' => $request->user_id, 
                'event_id' => $request->event_id,
                'score' => $request->score
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Review Updated',
                'data' => $review
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Review Not Found',
        ], 404);
    }

    public function destroy(string $id)
    {
        $review = Review::findOrfail($id);
        if($review) {
            $review->delete();
            return response()->json([
                'success' => true,
                'message' => 'Review Deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Review Not Found',
        ], 404);
    }
}
