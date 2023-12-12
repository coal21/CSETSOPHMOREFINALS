<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Caregiver;
use App\Models\Family;
use App\Models\Supervisor;
use App\Models\Patient;
use App\Models\Doctors;
use App\Models\Roles;
use App\Models\Employee;
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
        $role = $request->post('role');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $existingUser = Caregiver::where('email', $email)->orWhere('phone', $phone)->exists()
            || Doctors::where('email', $email)->orWhere('phone', $phone)->exists()
            || Supervisor::where('email', $email)->orWhere('phone', $phone)->exists()
            || Patient::where('email', $email)->orWhere('phone', $phone)->exists()
            || Family::where('email', $email)->orWhere('phone', $phone)->exists();
        if ($existingUser) {
            return back()->withInput()->withErrors(['message' => 'An account with this email or phone already exists.']);
        }
    
        if ($role === 'Patient') {

            $groups = array("A", "B", "C", "D");
            $randomKey = array_rand($groups);
            $randomValue = $groups[$randomKey];

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
        elseif ($role === 'Supervisor') {
            $supervisor = Supervisor::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'DOB' => $request->input('dob'),
            'status' => "Pending",
            'role_id' => 2,
            ]);
            return view('Homwefind.pending_approval');
        }
        elseif ($role === 'Caregiver') {
            $caregiver = Caregiver::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'DOB' => $request->input('dob'),
            'status' => "Pending",
            'role_id' => 4,
            ]);
            return view('Homwefind.pending_approval');
        }
        elseif ($role === 'Family') {
            $family = Family::create([
            'first_name' => $request->input('firstName'),
            'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'DOB' => $request->input('dob'),
            'status' => "Pending",
            'role_id' => 6,
            ]);
            return view('Homwefind.pending_approval');
    }
    }
}