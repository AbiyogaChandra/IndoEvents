<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function store(Request $request, $eventId)
    {
        $user = Auth::user();

        $request->validate([
            'rating' => 'required|integer|between:1,5',
        ]);

        $existingReview = Review::where('event_id', $eventId)
            ->where('user_id', $user->id)
            ->first();

        if ($existingReview) {
            $existingReview->update([
                'score' => $request->rating,
            ]);

            return redirect()->route('event.show', $eventId)
                ->with('success', 'Your review has been updated successfully.');
        } else {
            $review = Review::create([
                'event_id' => $eventId,
                'user_id' => $user->id,
                'score' => $request->rating,
            ]);

            return redirect()->route('event.show', $eventId)
                ->with('success', 'Your review has been submitted successfully.');
        }
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
