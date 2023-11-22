<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Caregiver;
use App\Models\Doctors;
use App\Models\Family;
use App\Models\Patient;
use App\Models\Roster;
use App\Models\Supervisor;
class admincontroller extends Controller
{
    public function show()
    {
        $roles = Roles::all();
        return view('Homwefind.admin', ['roles' => $roles]);
    }

    public function approval()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        
        return view('Homwefind.approveaccounts', [
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'family' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors
        ]);
    }


    public function approve_account($id)
{
    $data = Caregiver::find($id);

    if ($data) {
        $data->status = 'approved';
        $saved = $data->save(); // Check if the save operation is successful
        
        if ($saved) {
            // If the save was successful
            // Fetch updated data for display after approval
            $caregivers = Caregiver::where('status', 'Pending')->get();
            // Fetch other pending data for display (if needed)
            
            return redirect('/approval')->with([
                'caregivers' => $caregivers,
                // Other necessary data for display on the approval page
            ]);
        } else {
            // If the save was not successful
            return redirect()->back()->with('error', 'Failed to update status.');
        }
    } else {
        // Handle the case where the record with the given ID doesn't exist
        return redirect()->back()->with('error', 'Caregiver not found.');
    }
}
}