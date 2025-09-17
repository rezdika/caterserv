<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Contact;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::all();
        $contacts = Contact::all();
        return view('pages.service', compact('services','contacts'));
    }
}
