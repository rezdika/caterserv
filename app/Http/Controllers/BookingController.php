<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Contact;

class BookingController extends Controller
{


    public function booking()
    {
        $contacts = Contact::all();
        return view('pages.book' ,compact('contacts'));
    }

    public function store(Request $request)
    {
        // Validasi data booking
        $request->validate([
            'country' => 'required|string',
            'city' => 'required|string',
            'venue' => 'required|string',
            'event_type' => 'required|in:small_event,big_event',
            'number_of_guests' => 'required|in:100-200,300-400,500-600,700-800,900-1000,1000+',
            'food_preference' => 'required|in:vegetarian,non_vegetarian',
            'contact_number' => 'required|string',
            'event_date' => 'required|date|after:today',
            'email' => 'required|email'
        ]);

        // Simpan data booking ke database
        \App\Models\Booking::create([
            'country' => $request->country,
            'city' => $request->city,
            'venue' => $request->venue,
            'event_type' => $request->event_type,
            'number_of_guests' => $request->number_of_guests,
            'food_preference' => $request->food_preference,
            'contact_number' => $request->contact_number,
            'event_date' => $request->event_date,
            'email' => $request->email,
            'status' => 'pending'
        ]);
        
        return redirect()->back()->with('success', 'Booking submitted successfully!');
    }
}
