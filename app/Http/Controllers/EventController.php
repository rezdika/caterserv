<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Contact;

class EventController extends Controller
{
    public function event()
    {
        $events = Event::all();
        $contacts = Contact::all();
        return view('pages.event', compact('events','contacts'));
    }
}
