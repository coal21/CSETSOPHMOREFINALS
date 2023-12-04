<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function createPrescription(Request $request) {

         $prescription = new Prescription();

         $prescription->$request->post('name');
         $prescription-$request->post('dateGiven');
         $prescription->$request->post('timeToGive');
         $prescription->$request->post('patient_id');
         $prescription->$request->post('comment');

         $prescription->save();
    }
}
