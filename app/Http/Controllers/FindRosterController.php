<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roster;
use App\Models\Caregiver;
use App\Models\Doctors;
use App\Models\Supervisor;
class FindRosterController extends Controller
{
    public function showtheRosterForm()
    {
        return view('Homwefind.FindRoster'); 
    }

    public function filtertheRosters(Request $request) {

        $request->validate([
            'selected_date' => 'required|date'
        ]);
        
        $selectedDate = $request->input('selected_date');
        $rosters = Roster::where('roster_date', $selectedDate)->get();
    
    
        return view('Homwefind.FindRoster', ['rosters' => $rosters]);
    }
}
