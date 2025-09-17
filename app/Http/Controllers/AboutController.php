<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;


class AboutController extends Controller
{
    public function about()
    {
        $about = About::first();
        $contacts = Contact::all();
        return view('pages.about', compact('about','contacts'));
    }
}
