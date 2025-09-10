<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(4)->get();
        $about = About::first();
        return view('pages.home', compact('services', 'about'));
    }

    
}
