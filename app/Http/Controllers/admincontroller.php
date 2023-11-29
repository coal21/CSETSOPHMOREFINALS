<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
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

    public function awaiting()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        
        return view('Homwefind.approveaccounts', [
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'families' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors
        ]);
    }

    public function approveAccount(Request $request)

    {

        $id = $request->input('id');
        $role_id = $request->input('role_id');

        $finalDecision = $request->input('decision');

        $usersRole = Roles::where('id', $role_id)->first();
        $user = null;

        switch ($usersRole->name) {
            case 'Caregiver':
                $user = Caregiver::findorFail($id);
                break;
            case 'Doctor':
                $user = Doctors::findorFail($id);
                break;
            case 'Supervisor':
                $user = Supervisor::findorFail($id);
                break;
            case 'Patient':
                $user = Patient::findorFail($id);
                break;
            case 'Family':
                $user = Family::findorFail($id);
                break;
        }

        if ($finalDecision == "Yes") {
            $user->status = "Approved";
            $user->save();
        } else {
            $user->delete();
        }

        return $this->awaiting();

    }
}