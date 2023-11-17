<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use App\Models\Roles;
use Illuminate\Http\Request;

class signupcontroller extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return view('Homwefind.signup', ['roles' => $roles]);
    }


    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:patients,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

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

        return redirect('Homwefind.pending_approval');
    }
}
