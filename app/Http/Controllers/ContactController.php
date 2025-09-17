<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function contact()
    {
        $contacts = Contact::all();
        return view('pages.contact', compact('contacts'));
    }
}
