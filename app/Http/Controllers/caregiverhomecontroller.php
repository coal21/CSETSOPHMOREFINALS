<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caregiver;

class caregiverhomecontroller extends Controller
{
    public function show()
    {

    $caregiver = Caregiver::all();
        return view('Homepages.caregiverhome', ['caregiver' => $caregiver]);

    }
    
    public function displayUserData()
{
    // Retrieve session data
    $storedFirstName = session('first_name');
    $storedLastName = session('last_name');
    $storedEmail = session('email');

    // Check if the required session data is present
    if ($storedFirstName && $storedLastName && $storedEmail) {
        return "User Information: First Name - $storedFirstName, Last Name - $storedLastName, Email - $storedEmail";
    } else {
        return "User information not found in the session.";
    }
}
}
