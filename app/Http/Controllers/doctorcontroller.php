<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Patient;

class doctorcontroller extends controller
{
    public function show()
    {
        $Apatients = Patient::where('status', 'Approved')->get();
        return view('Homepages.doctorhome', ['Apatients' => $Apatients]);
    }

    public function doctorsearchPatients(Request $request)
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
    return view('Homepages.doctorhome', [
        'Apatients' => $Apatients, 
    ]);
}
}