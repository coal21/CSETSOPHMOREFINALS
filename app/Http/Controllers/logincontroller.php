<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Caregiver;
use App\Models\Family;
use App\Models\Supervisor;
use App\Models\Patient;
use App\Models\Doctors;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            if ($user && $user->password === $password) {
                // Authentication successful
                Auth::login($user);
                $homeRoute = 'admin.home';
                return redirect()->route($homeRoute);
            } else {
                // Authentication failed
                return redirect()->back()->withInput()->withErrors(['Invalid credentials']);
            }
            break;
        case 'Supervisor':
            $user = Supervisor::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password)) {
                // Authentication successful
                Auth::login($user);
                $homeRoute = 'supervisor.home';
                return redirect()->route($homeRoute);
            } else {
                // Authentication failed
                return redirect()->back()->withInput()->withErrors(['Invalid credentials']);
            }
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
        return redirect()->back()->withInput()->withErrors(['Invalid role']);
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
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        $roles = Roles::all();
        return view('Homepages.adminhome', [
            'roles' => $roles,
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'family' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors
        ]);
    }

    public function supervisorHome()
    {
        $roles = Roles::all();
        return view('Homepages.supervisorhome', ['roles' => $roles]);
    }

    public function doctorHome()
    {
        return view('Homepages.doctorhome');
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