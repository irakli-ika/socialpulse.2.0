<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    public function index()
    {
        return view('team_members.index');
    }

    public function show($id)
    {
        
        return view('team_members.show');
    }
}
