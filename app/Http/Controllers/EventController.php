<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get data from table events
        $events = Event::latest()->get();
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Event List',
            'data' => $events
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'event_time' => 'required',
            'location' => 'required',
            'ticket_price' => 'required',
            'photo' => 'required',
            'profile_id' => 'required'
        ]);
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //save to database
        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'event_time' => $request->event_time,
            'location' => $request->location,
            'ticket_price' => $request->ticket_price,
            'photo' => $request->photo,
            'profile_id' => $request->profile_id
        ]);
        //success save to database
        if($event) {
            return response()->json([
                'success' => true,
                'message' => 'Event Created',
                'data' => $event
            ], 201);
        }
        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Event Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //find event by ID
        $event = Event::findOrfail($id);
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Event Details',
            'data' => $event
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'event_time' => 'required',
            'location' => 'required',
            'ticket_price' => 'required',
            'photo' => 'required',
            'profile_id' => 'required'
        ]);
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //find post by ID
        $event = Event::findOrFail($event->id);
        if($event) {
            //update post
            $event->update([
                'title' => $request->title,
                'description' => $request->description,
                'event_time' => $request->event_time,
                'location' => $request->location,
                'ticket_price' => $request->ticket_price,
                'photo' => $request->photo,
                'profile_id' => $request->profile_id
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Event Updated',
                'data' => $event
            ], 200);
        }
        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Event Not Found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //find post by ID
        $event = Event::findOrfail($id);
        if($event) {
            //delete post
            $event->delete();
            return response()->json([
                'success' => true,
                'message' => 'Event Deleted',
            ], 200);
        }
        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Event Not Found',
        ], 404);
    }
}
