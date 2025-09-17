<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Contact;

class MenuController extends Controller
{
    public function menu()
    {
        $menus = Menu::all();
        $contacts = Contact::all();
        return view('pages.menu', compact('menus','contacts'));
    }
}
