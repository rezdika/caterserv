<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Contact;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::latest()->get();
        $contacts = Contact::all();
        return view('pages.blog', compact('blogs','contacts'));
    }
}
