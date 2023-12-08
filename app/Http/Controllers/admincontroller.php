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

class admincontroller extends Controller
{
    public function show()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Approved')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        $roles = Roles::all();
        return view('Homepages.adminhome', [
            'roles' => $roles,
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'family' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors,
        ]);
    }

    public function create(Request $request)
    {
        $role = Roles::create([
            'name' => $request->input('newRole'),
            'access_level' => $request->input('accessLV'),
        ]);
    }
    
    public function awaiting()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Approved')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        $roles = Roles::all();
        return view('Homepages.adminhome', [
            'roles' => $roles,
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'families' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors
        ]);
    }

    public function adminsearchPatients(Request $request)
{
    $caregivers = Caregiver::where('status', 'Pending')->get();
    $doctors = Doctors::where('status', 'Pending')->get();
    $family = Family::where('status', 'Pending')->get();
    $patients = Patient::where('status', 'Approved')->get();
    $supervisors = Supervisor::where('status', 'Pending')->get();
    $roles = Roles::all();
    $patients = Patient::where('status', 'Approved')->get();
    $searchBy = $request->input('searchBy');
    $searchText = $request->input('searchText');

    $patients = [];

    if ($searchBy === 'all') {
        $patients = Patient::where('status', 'Approved')->get();
    } else {
        $patients = Patient::where('status', 'Approved')
            ->where($searchBy, 'LIKE', "%$searchText%")
            ->get();
    }
    return view('Homwefind.patientsearch', [
        'roles' => $roles,
        'patients' => $patients, 
        'roles' => $roles,
        'caregivers' => $caregivers, 
        'doctors' => $doctors, 
        'family' => $family, 
        'patients' => $patients, 
        'supervisors' => $supervisors,
    ]);
}

}
