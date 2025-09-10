<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::all();
        return view('pages.service', compact('services'));
    }
}
