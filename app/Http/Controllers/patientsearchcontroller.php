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
    $searchBy = $request->input('searchBy');
    $searchText = $request->input('searchText');
    $patients = null;

    switch ($searchBy) {
        case 'first_name':
            $patients = Patient::where('status', 'approved')
                ->where('first_name', 'LIKE', "%$searchText%")
                ->get();
            break;
        case 'last_name':
            $patients = Patient::where('status', 'approved')
                ->where('last_name', 'LIKE', "%$searchText%")
                ->get();
            break;
        case 'id':
            $patients = Patient::where('status', 'approved')
                ->where('id', $searchText)
                ->get();
            break;
        case 'emergency_contact':
            $patients = Patient::where('status', 'approved')
                ->where('emergency_contact', 'LIKE', "%$searchText%")
                ->get();
            break;
        case 'emergency_contact_name':
            $patients = Patient::where('status', 'approved')
                ->where('emergency_contact_name', 'LIKE', "%$searchText%")
                ->get();
            break;
        case 'created_at':
            $patients = Patient::where('status', 'approved')
                ->where('created_at', 'LIKE', "%$searchText%")
                ->get();
            break;
        default:
            break;
    }

    return view('Homwefind.patientsearch', ['patients' => $patients]);
}
}