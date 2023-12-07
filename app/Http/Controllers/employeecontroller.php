<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class employeecontroller extends Controller
{
    public function show()
    {

    $employee = Employee::all();
        return view('Homepages.caregiverhome', ['employee' => $employee]);

    }
}
