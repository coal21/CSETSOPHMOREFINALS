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
use App\Models\Employee;

class patientsearchcontroller extends Controller
{
    public function search()
    {
        $patients = Patient::where('status', 'Approved')->get();
        return view('Homwefind.patientsearch', [
            'patients' => $patients, 
        ]);
    }

    public function searchPatients(Request $request)
    {
        $patients = Patient::where('status', 'Approved')->get();
        $searchBy = $request->input('searchBy');
        $searchText = $request->input('searchText');
    
        $patients = [];
    
        if ($searchBy == 'all') {
            $patients = Patient::where('status', 'Approved')->get();
        } else {
            $patients = Patient::where('status', 'Approved')
                ->where($searchBy, 'LIKE', "%$searchText%")
                ->get();
        }
        return view('Homwefind.patientsearch', [
            'patients' => $patients, 
        ]);
}
}