<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index(string $eventId)
    {
        $comments = Comment::where('event_id', $eventId)
                       ->orderBy('created_at', 'desc')
                       ->get();;

        return response()->json([
            'success' => true,
            'message' => 'Comments List',
            'data' => $comments
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_id' => 'required', 
            'profile_id' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $comment = Comment::create([
            'event_id' => $request->event_id, 
            'profile_id' => $request->profile_id,
            'content' => $request->content
        ]);
        if($comment) {
            return response()->json([
                'success' => true,
                'message' => 'Comment Created',
                'data' => $comment
            ], 201);
        }
        return response()->json([
            'success' => false,
            'message' => 'Comment Failed to Save',
        ], 409);
    }

    public function show(string $id)
    {
        $comment = Comment::findOrfail($id);
        return response()->json([
            'success' => true,
            'message' => 'Comment Details',
            'data' => $comment
        ], 200);
    }

    public function update(Request $request, Comment $comment)
    {
        $validator = Validator::make($request->all(), [
            'event_id' => 'required', 
            'profile_id' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $comment = Comment::findOrFail($comment->id);
        if($comment) {
            $comment->update([
                'event_id' => $request->event_id, 
                'profile_id' => $request->profile_id,
                'content' => $request->content
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Comment Updated',
                'data' => $comment
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Comment Not Found',
        ], 404);
    }

    public function destroy(string $id)
    {
        $comment = Comment::findOrfail($id);
        if($comment) {
            $comment->delete();
            return response()->json([
                'success' => true,
                'message' => 'Comment Deleted',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Comment Not Found',
        ], 404);
    }
}
