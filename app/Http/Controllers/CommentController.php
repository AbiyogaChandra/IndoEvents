<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Store the comment
        Comment::create([
            'event_id' => $event->id,
            'profile_id' => auth()->user()->profile->id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim!');
    }


}
