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
}
