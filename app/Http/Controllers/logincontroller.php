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
use Illuminate\Support\Facades\Session;


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
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
                $homeRoute = 'admin.home';
                return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
            }
            break;
        case 'Supervisor':
            $user = Supervisor::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password)) {
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
                $homeRoute = 'supervisor.home';
                return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
            }
            break;
        case 'Doctor':
            $user = Doctors::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password && $user->status === 'Approved')) {
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
                $homeRoute = 'doctor.home';
                return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);            }
            break;
        case 'Caregiver':
            $user = Caregiver::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password && $user->status === 'Approved')) {
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
                $homeRoute = 'caregiver.home';
                return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
                }
            break;
        case 'Patient':
            $user = Patient::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password && $user->status === 'Approved')) {
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
            $homeRoute = 'patient.home';
            return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);
            }
            break;
        case 'Family':
            $user = Patient::where('email', $email)->first();
            if ($user && Hash::check($password, $user->password && $user->status === 'Approved')) {
                Auth::login($user);
                session_start();
                session(['name' => $user->first_name . ' ' . $user->last_name]);
                session(['id' => $user->id]);
                session(['role' => $user->role_id]);
            $homeRoute = 'family.home';
            return redirect()->route($homeRoute);
            } else {
                $errorMessage = 'Invalid credentials, please try again';
                return redirect()->back()->withInput()->withErrors(['error' => $errorMessage]);            }
            break;
            default:
    }
// Code to check if account is approved->
    if ($user && password_verify($password, $user->password  && $user->status === 'Approved')) {
        session_start();
        session(['name' => $user->first_name . ' ' . $user->last_name]);
        session(['id' => $user->id]);
        session(['role' => $user->role_id]);
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
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }


}