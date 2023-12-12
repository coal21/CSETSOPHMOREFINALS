<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctors;
use App\Models\Patient;

class doctorappointmentcontroller extends Controller
{
    public function show()
    {
        $patients = Patient::where('status', 'Approved')->get();
        $doctors = Doctors::where('status', 'Approved')->get();
        $Appointment = Appointment::all();
        return view('Homwefind.doctorappointment', [
            'Appointment' => $Appointment,
            'doctors' => $doctors, 
            'patients'=> $patients,
        ]);
    }


    public function appointmentsubmit(Request $request)
    {
        $patient_id = $request->input('patient_id');
        $appointment_date = $request->input('appointment_date');

        $existingUser = Appointment::where('patient_id', $patient_id)->wherewhere('appointment_date', $appointment_date)->exists();
        if ($existingUser) {
            return back()->withInput()->withErrors(['message' => 'An account with this email or phone already exists.']);
        }
        else 
        $Appointment = Appointment::create([
            'patient_id' => $request->input('patient_id'),
            'doctor_id' => $request->input('doctor_id'),
            'appointment_date' => $request->input('appointment_date'),
            'comment' => $request->input('comment'),
            
        ]);
        return $this-> show();
    }
}
