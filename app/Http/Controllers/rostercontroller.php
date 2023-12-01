<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Caregiver;
use App\Models\Doctors;
use App\Models\Patient;
use App\Models\Roster;
use App\Models\Supervisor;

class rostercontroller extends Controller
{
    public function schedule()
    {
        $rosters = Roster::all();
                return view('Homwefind.roster', ['rosters' => $rosters]);
    }
}
