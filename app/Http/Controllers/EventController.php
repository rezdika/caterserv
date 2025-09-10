<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function event()
    {
        $events = Event::all();
        return view('pages.event', compact('events'));
    }
}
