<?php

namespace App\Http\Controllers;

use App\Models\Caregiver;
use App\Models\Doctors;
use App\Models\Roster;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class rostercontroller extends Controller
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

        // Fetch the created roster (you may customize this based on your actual database structure)
        $createdRoster = Roster::find($roster->id);

        // Pass the roster data to the view
        return view('Homwefind.roster')->with('createdRoster', $createdRoster);


    }

    
}
