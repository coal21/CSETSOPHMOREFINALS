<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\Patient;
class doctorappointmentcontroller extends Controller
{
    public function show()
    {
        $Appointment = Appointment::all();
        return view('Homwefind.doctorappointment', ['Appointment' => $Appointment]);
    }

    public function appointmentsubmit(Request $request)
    {
        $Appointment = Appointment::create([
            'patient_id' => $request->input('patient_id'),
            'doctor_id' => $request->input('doctor_id'),
            'appointment_date' => $request->input('appointment_date'),
        ]);
    }
}
