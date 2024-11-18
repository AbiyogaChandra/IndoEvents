<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function home()
    {
        $popularEvents = Event::query()
            ->select(
                'events.*',
                DB::raw('COALESCE(AVG(reviews.score), 0) as averageRating'),
                DB::raw('(
                    SELECT COUNT(*) 
                    FROM tickets 
                    WHERE tickets.event_id = events.id
                ) as registrantsCount')
            )
            ->leftJoin('reviews', 'events.id', '=', 'reviews.event_id')
            ->leftJoin('tickets', 'events.id', '=', 'tickets.event_id')
            ->groupBy('events.id')
            ->orderBy('registrantsCount', 'desc')
            ->orderBy('averageRating', 'desc') 
            ->take(6) 
            ->get();

        $currentRoute = Route::currentRouteName();

        return view(
            'index', 
            compact('popularEvents', 'currentRoute')
        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'recent');
        $location = $request->get('location', null);
        $date = $request->get('date', null);

        $events = Event::query()
            ->select(
                'events.*',
                DB::raw('COALESCE(AVG(reviews.score), 0) as averageRating'),
                DB::raw('(
                    SELECT COUNT(*) 
                    FROM tickets 
                    WHERE tickets.event_id = events.id
                ) as registrantsCount')
            )
            ->leftJoin('reviews', 'events.id', '=', 'reviews.event_id')
            ->groupBy('events.id');

        // Apply filters
        if ($location) {
            $events->where('events.location', $location);
        }

        if ($date) {
            $events->whereDate('events.event_time', $date);
        }

        if ($filter === 'follower') {
            $events->orderBy('registrantsCount', 'desc');
        } elseif ($filter === 'score') {
            $events->orderBy('averageRating', 'desc');
        } else {
            $events->orderBy('created_at', 'desc');
        }

        $events = $events->paginate(6);

        $currentRoute = Route::currentRouteName();

        return view(
            'events',
            compact('events', 'filter', 'currentRoute')
        );
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
        $event = Event::findOrFail($id);
        $registrantsCount = $event->tickets()->count();
        $reviewsCount = $event->reviews()->count();
        $averageRating = $event->reviews()->avg('score');
        
        return view('event', compact('event', 'registrantsCount', 'reviewsCount', 'averageRating')); 
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
