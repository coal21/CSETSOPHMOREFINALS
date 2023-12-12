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

        $supervisor = Supervisor::findorfail($roster->supervisor_id);
        $doctor = Doctors::findorfail($roster->doctor_id);

        $cg1 = Caregiver::findorfail($roster->caregiver_1_id);
        $cg2 = Caregiver::findorfail($roster->caregiver_2_id);
        $cg3 = Caregiver::findorfail($roster->caregiver_3_id);
        $cg4 = Caregiver::findorfail($roster->caregiver_4_id);

        $roster->supervisor_first_name = $supervisor->first_name;
        $roster->supervisor_last_name = $supervisor->last_name;

        $roster->doctor_first_name = $doctor->first_name;
        $roster->doctor_last_name = $doctor->last_name;

        $roster->caregiver_1_first_name = $cg1->first_name;
        $roster->caregiver_1_last_name = $cg1->last_name;

        $roster->caregiver_2_first_name = $cg2->first_name;
        $roster->caregiver_2_last_name = $cg2->last_name;

        $roster->caregiver_3_first_name = $cg3->first_name;
        $roster->caregiver_3_last_name = $cg3->last_name;

        $roster->caregiver_4_first_name = $cg4->first_name;
        $roster->caregiver_4_last_name = $cg4->last_name;
        
        $roster->save();

        return view('Homwefind.roster')->with('createdRoster', $roster);
    }
public function filterRosters(Request $request) {

    $request->validate([
        'selected_date' => 'required|date'
    ]);
    
    $selectedDate = $request->input('selected_date');
    $rosters = Roster::where('roster_date', $selectedDate)->get();

    // You can also load related data (e.g., supervisor, doctor, caregivers) if needed

    return view('Homwefind.roster', ['rosters' => $rosters]);
}


}
