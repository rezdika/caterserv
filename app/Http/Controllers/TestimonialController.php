<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('pages.testimonial', compact('testimonials'));
    }
}
