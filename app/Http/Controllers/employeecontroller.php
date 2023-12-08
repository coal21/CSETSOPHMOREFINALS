<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class employeecontroller extends Controller
{
    public function show()
    {

    $employee = Employee::all();
        return view('Homwefind.employee', ['employee' => $employee]);

    }

    public function create(Request $request)
    {
        $employee = Employee::create([
            'new_salary' => $request->input('new_salary'),
            'emp_ID' => $request->input('emp_ID'),
        ]);
    }
}
