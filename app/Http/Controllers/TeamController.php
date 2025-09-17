<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Contact;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();
        $contacts = Contact::all();
        return view('pages.team', compact('teams','contacts'));
    }
}
