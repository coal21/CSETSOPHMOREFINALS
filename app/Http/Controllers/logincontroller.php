<?php

namespace App\Http\Controllers;

use App\Models\Caregiver;
use App\Models\Family;
use App\Models\Supervisor;
use App\Models\Patient;
use App\Models\Doctors;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return view('Homwefind.login', ['roles' => $roles]);
    }

    public function login(Request $request)
{
    $roles = Roles::all();
    $role = $request->input('role');
    $email = $request->input('email');
    $password = $request->input('password');

    switch ($role) {
        case 'Admin':
            $user = Admin::where('email', $email)->first();
            $homeRoute = 'admin.home';
            break;
        case 'Supervisor':
            $user = Supervisor::where('email', $email)->first();
            $homeRoute = 'supervisor.home';
            break;
        case 'Doctor':
            $user = Doctors::where('email', $email)->first();
            $homeRoute = 'doctor.home';
            break;
        case 'Caregiver':
            $user = Caregiver::where('email', $email)->first();
            $homeRoute = 'caregiver.home';
            break;
        case 'Patient':
            $user = Patient::where('email', $email)->first();
            $homeRoute = 'patient.home';
            break;

        default:
            return back()->withErrors(['message' => 'Invalid role']);
    }
// Code to check if account is approved-> && $user->status === 'Approved'
    if ($user && password_verify($password, $user->password)) {
        return redirect()->route($homeRoute);
    } else {
        return back()->withErrors(['message' => 'Invalid credentials or status not approved']);
    }
}

    public function adminHome()
    {
        $roles = Roles::all();
        return view('Homepages.adminhome', ['roles' => $roles]);
    }

    public function supervisorHome()
    {
        return view('supervisor.home');
    }

    public function doctorHome()
    {
        return view('doctor.home');
    }

    public function caregiverHome()
    {
        return view('caregiver.home');
    }

    public function patientHome()
    {
        return view('patient.home');
    }

    public function familyHome()
    {
        return view('family.home');
    }
}