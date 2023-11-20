<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctors;
use App\Models\Roles;
use Illuminate\Http\Request;


class signupcontroller extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return view('Homwefind.signup', ['roles' => $roles]);
    }

    
    public function submit(Request $request){
        $role = $request->post('role');

        if ($role === 'Patient') {
            $patient = Patient::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'DOB' => $request->input('dob'),
            'status' => "Pending",
            'family_code' => $request->input('familyCode'),
            'emergency_contact' => $request->input('emergencyContact'),
            'relationship' => $request->input('relationToContact'),
            'amount_due' => 0.0,
            'doctor_id' => null,
            'role_id' => 5,
            ]);
            return view('Homwefind.pending_approval');
        }
        elseif ($role === 'Doctor') {
            $doctor = Doctors::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'DOB' => $request->input('dob'),
            'status' => "Pending",
            'role_id' => 3,
            ]);
            return view('Homwefind.pending_approval');
    }
    }
}