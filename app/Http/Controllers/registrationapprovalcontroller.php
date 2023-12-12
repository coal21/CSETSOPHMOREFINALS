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
use App\Models\Employee;

class registrationapprovalcontroller extends Controller
{
    public function show()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $Ppatients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        $roles = Roles::all();
        return view('Homwefind.approveaccounts', [
            'roles' => $roles,
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'family' => $family, 
            'Ppatients' => $Ppatients, 
            'supervisors' => $supervisors,
        ]);
    }
    
    public function awaiting()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $Ppatients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        $roles = Roles::all();
        return view('Homwefind.approveaccounts', [
            'roles' => $roles,
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'families' => $family, 
            'Ppatients' => $Ppatients, 
            'supervisors' => $supervisors
        ]);
    }

    public function approveAccount(Request $request)
    {
        $id = $request->input('id');
        $role_id = $request->input('role_id');
        $first_name = $request->input('first_name');
        $salary = $request->input('salary');
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


        if ($finalDecision = "Yes") {
            $employee = Employee::create([
                'first_name' => $request->input('first_name'),
                'salary' => $request->input('salary'),
                'role_id' => $request->input('role_id'),
            ]);
            $user->status = "Approved";
            $user->save();
        } elseif ($finalDecision = "No"){
            $user->delete();
        }

        return $this->awaiting();

    }
}
