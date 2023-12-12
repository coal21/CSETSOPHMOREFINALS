<?php

namespace App\Http\Controllers;
use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
   public function update(Request $request) {

      $caregiver_id = $request->input("caregiver_id");

      $mm = $request->input("mm");
      $am = $request->input("am");
      $nm = $request->input("nm");

      $breakfeast = $request->input("breakfeast");
      $lunch = $request->input("lunch");
      $dinner = $request->input("dinner");

      

   }
}
