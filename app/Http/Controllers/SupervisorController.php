<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;


class SupervisorController extends Controller
{
    public function show()
    {
        $Apatients = Patient::where('status', 'Approved')->get();
        return view('Homepages.doctorhome', ['Apatients' => $Apatients]);
    }

    public function supervisorearchPatients(Request $request)
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
    return view('Homepages.supervisorhome', [
        'Apatients' => $Apatients, 
    ]);
}
}
