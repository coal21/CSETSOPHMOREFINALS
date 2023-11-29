<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorappointmentcontroller extends Controller
{
    public function create(Request $request)
    {
        $doctorinput = doctorinput::create([
            'PatientID' => $request->input('PatientID'),
            'PatientName' => $request->input('PatientName'),
            'Date' => $request->input('Date'),
        ]);
    }
}
