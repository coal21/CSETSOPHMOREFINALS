<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class employeecontroller extends Controller
{
    public function show()
    {
       $employees = Employee::all();
       return view('Homwefind.employee', [
        'employees' => $employees,
    ]);
    }
}
