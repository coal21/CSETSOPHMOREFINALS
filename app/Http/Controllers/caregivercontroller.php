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

class caregivercontroller extends Controller
{
    public function show()
    {
        $Apatients = Patient::where('status', 'Approved')->get();
        $Apatients = [];
        return view('Homepages.caregiverhome', ['Apatients' => $Apatients]);
    }

    public function caregiversearchPatients(Request $request)
    {
    $Apatients = Patient::where('status', 'Approved')->get();
    $searchBy = $request->input('searchBy');
    $searchText = $request->input('searchText');

    $Apatients = [];

    if ($searchBy === 'all') {
        $Apatients = Patient::where('status', 'Approved')->get();
    } else {
        $Apatients = Patient::where('status', 'Approved')
            ->where($searchBy, 'LIKE', "%$searchText%")
            ->get();
    }
    return view('Homepages.caregiverhome', [
        'Apatients' => $Apatients, 
    ]);
}
}
