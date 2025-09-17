<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Contact; 

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonials = Testimonial::all();
        $contacts = Contact::all();
        return view('pages.testimonial', compact('testimonials','contacts'));
    }
}
