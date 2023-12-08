<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientsearchcontroller extends Controller
{
    public function show()
    {
        $patients = Patient::where('status', 'Approved')->get();
        $roles = Roles::all();
        return view('Homwefind.patientsearch', [
            'patients' => $patients, 
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
