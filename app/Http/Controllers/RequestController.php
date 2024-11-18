<?php

namespace App\Http\Controllers;

use App\Models\Request as EventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function createRequest()
    {
        return view('create-event-request');
    }

    public function storeRequest(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:create,update',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_time' => 'required|date',
            'location' => 'required|string|max:255',
            'ticket_price' => 'required|integer|min:0',
            'event_id' => 'nullable|exists:events,id', // For updates
        ]);

        $validated['user_id'] = Auth::id(); // Track who made the request

        EventRequest::create($validated);

        return redirect()->route('my-events')->with('success', 'Your request has been submitted for approval.');
    }
}
