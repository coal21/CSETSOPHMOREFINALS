<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function update(Request $request) {
      $patient_id = $request->input("patient_id");
      
   }
}
