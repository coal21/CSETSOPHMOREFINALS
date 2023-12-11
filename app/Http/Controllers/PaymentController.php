<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
   public function update(Request $request) {

      $patient_id = $request->input("patient_id");

      $patient = Patient::find($patient_id);

      $amount_due = $patient->amount_due;
      $lastPaymentDate = $patient->lastPaymentDate;
      $currentDate = date(date('Y-m-d'));

      $lastPaymentDateAsTimestamp = strtotime($lastPaymentDate);
      $currentDateAsTimestamp = strtotime($currentDate);

      $daysDifference = abs(($currentDateAsTimestamp - $lastPaymentDateAsTimestamp) / 60 / 60 / 24);

      $paymentPerDay = 10;
      $paymentPerAppointment = 50;
      $paymentPerPrescription = 5;
   
      if ($daysDifference != 0) {

         $appointments = Appointment::where('patient_id', $patient_id)
         ->whereDate('appointment_date', '>=', $lastPaymentDate)
         ->whereDate('appointment_date', '<=', $currentDate)
         ->get();

         $prescrptions = Prescription::whesre('patient_id', $patient_id)
         ->whereDate('appointment_date', '>=', $lastPaymentDate)
         ->whereDate('appointment_date', '<=', $currentDate)
         ->get();

         $prescription2Pay = count($prescrptions) * $paymentPerPrescription;
         $appointment2Pay = count($appointments) * $paymentPerAppointment;

         $amountToAdd =($daysDifference * $paymentPerDay); + $appointment2Pay + $prescription2Pay;
         $patient->amount_due += $amountToAdd;

         $patient->save();
         
      } else {
         return "SAME DAY";
      }

   }
}