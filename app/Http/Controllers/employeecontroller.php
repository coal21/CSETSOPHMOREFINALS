<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class employeecontroller extends Controller
{
    public function show()
    {

    $employees = Employee::all();
        return view('Homwefind.employee', ['employee' => $employees]);

    }

    public function update(Request $request)
    {
        // Assuming 'id' is a unique identifier for the employee
        $employees = Employee::find($request->input('id'));
    
        if ($employees) {
            // Update the salary for the existing employee
            $employees->update([
                'new_salary' => $request->input('new_salary'),
            ]);
    
            // You can return a response or redirect to a specific page
            return view('Homwefind.employee', compact('employees'));

        }
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the id and first_name columns from the employees table
        $employees = Employee::query()
            ->where('first_name', '=', $search)
            ->orWhere('id', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the results compacted
        return view('Homwefind.employee', compact('employees'));
    }
}
