<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class MyEventsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $events = DB::table('events')
            ->select(
                'events.id',
                'events.title',
                'events.event_time',
                DB::raw('COALESCE(AVG(reviews.score), 0) as averageRating')
            )
            ->leftJoin('reviews', 'events.id', '=', 'reviews.event_id')
            ->where('profile_id', $user->profile->id)
            ->groupBy('events.id')
            ->orderBy('events.created_at', 'desc')
            ->paginate(10);

        $currentRoute = 'my-events';

        return view('my-events', compact('events', 'currentRoute'));
    }

    public function viewEvent($id)
    {
        $event = DB::table('events')->find($id);

        if (!$event) {
            return redirect()->route('my-events')->with('error', 'Event not found.');
        }

        return view('view-event', compact('event'));
    }

    public function editEvent($id)
    {
        $event = DB::table('events')->find($id);

        if (!$event) {
            return redirect()->route('my-events')->with('error', 'Event not found.');
        }

        return view('edit-event', compact('event'));
    }
}
