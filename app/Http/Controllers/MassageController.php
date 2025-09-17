<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Massage;
use App\Models\Contact;

class MassageController extends Controller
{
    public function contact()
    {
        $contacts = Contact::all();
        return view('pages.contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        // Validasi data kontak
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        // Simpan pesan ke database
        \App\Models\Massage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status' => 'unread'
        ]);
        
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
