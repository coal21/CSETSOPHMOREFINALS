<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;


class SupervisorController extends Controller

{
    public function showRosterForm()
    {
        return view('Homwefind/roster'); 
    }

    public function createRoster(Request $request) {

        $roster = new Roster();
        
        $roster->roster_date = $request->post('roster_date');
        $roster->supervisor_id = $request->post('supervisor_id');
        $roster->doctor_id = $request->post('doctor_id');
        $roster->caregiver_1_id = $request->post('caregiver_1_id');
        $roster->caregiver_2_id = $request->post('caregiver_2_id');
        $roster->caregiver_3_id = $request->post('caregiver_3_id');
        $roster->caregiver_4_id = $request->post('caregiver_4_id');

        $roster->save();

        $createdRoster = Roster::find($roster->id);

        return view('Homwefind.roster')->with('createdRoster', $createdRoster);
    }
    public function filterRosters(Request $request) {
        $request->validate([
            'selected_date' => 'nullable|date'
        ]);
    
        $selectedDate = $request->input('selected_date', now()->toDateString());
            $rosters = Roster::where('roster_date', $selectedDate)->get();
    
        if ($rosters->isEmpty()) {
            return view('Homwefind.roster', ['message' => 'Sorry! No Rosters on ' . $selectedDate]);
        }
            return view('Homwefind.roster', ['rosters' => $rosters]);
    }


}
