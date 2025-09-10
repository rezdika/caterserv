<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::all();
        return view('pages.team', compact('teams'));
    }
}
