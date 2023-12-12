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
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
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
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
            }
            break;
        case 'Doctor':
            $user = Doctors::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password)) {
                // Authentication successful
                Auth::login($user);
                $homeRoute = 'doctor.home';
                return redirect()->route($homeRoute);
            } else {
                // Authentication failed
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);            }
            break;
        case 'Caregiver':
            $user = Caregiver::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password)) {
                // Authentication successful
                Auth::login($user);
                $homeRoute = 'caregiver.home';
                return redirect()->route($homeRoute);
            } else {
                // Authentication failed
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);            }
            break;
        case 'Patient':
            $user = Patient::where('email', $email)->first();
            $homeRoute = 'patient.home';
            break;
        case 'Family':
            $user = Patient::where('email', $email)->first();
            $homeRoute = 'patient.home';
            break;
            default:
            $errorMessage = 'Invalid role';
            return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
    }
// Code to check if account is approved-> && $user->status === 'Approved'
    if ($user && password_verify($password, $user->password)) {
        // session([
        //     'user_id' => $user->id,
        //     'first_name' => $user->first_name,
        //     'last_name' => $user->last_name,
        //     'email' => $user->email,
        //     'role' => $role,
        // ]);
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
        return view('Homwefind.supervisor', ['roles' => $roles]);
    }

    public function doctorHome()
    {
        $roles = Roles::all();
        return view('Homepages.doctorhome', ['roles' => $roles]);
    }

    public function caregiverHome()
    {
        $roles = Roles::all();
        return view('Homepages.caregiverhome', ['roles' => $roles]);    
    }

    public function patientHome()
    {
        return view('patient.home');
    }

    public function familyHome()
    {
        $roles = Roles::all();
        return view('Homepages.familyhome', ['roles' => $roles]);    
    }
}