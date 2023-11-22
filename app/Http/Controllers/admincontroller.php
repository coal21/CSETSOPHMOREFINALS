<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Caregiver;
use App\Models\Doctors;
use App\Models\Family;
use App\Models\Patient;
use App\Models\Roster;
use App\Models\Supervisor;
class admincontroller extends Controller
{
    public function show()
    {
        $roles = Roles::all();
        return view('Homwefind.admin', ['roles' => $roles]);
    }

    public function approval()
    {
        $caregivers = Caregiver::where('status', 'Pending')->get();
        $doctors = Doctors::where('status', 'Pending')->get();
        $family = Family::where('status', 'Pending')->get();
        $patients = Patient::where('status', 'Pending')->get();
        $supervisors = Supervisor::where('status', 'Pending')->get();
        
        return view('Homwefind.approveaccounts', [
            'caregivers' => $caregivers, 
            'doctors' => $doctors, 
            'family' => $family, 
            'patients' => $patients, 
            'supervisors' => $supervisors
        ]);
    }
    public function approve_account($id)
    {
        try {
            // Log to verify method entry and received ID
            Log::info('Accessing approve_account method.');
            Log::info('Received ID for approval: ' . $id);

            // Find the caregiver by ID
            $caregiver = Caregiver::findOrFail($id);

            // Log found caregiver information
            Log::info('Found caregiver: ' . $caregiver->id . ', Status: ' . $caregiver->status);

            // Perform the approval logic here
            $caregiver->status = 'approved';
            $caregiver->save();

            // Log success message
            Log::info('Caregiver approved successfully.');

            // Redirect with a success message or perform further actions
            return redirect('/approval')->with('success', 'Caregiver approved successfully.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            // Log if caregiver is not found
            Log::warning('Caregiver not found for ID: ' . $id);
            return redirect()->back()->with('error', 'Caregiver not found.');
        } catch (\Exception $exception) {
            // Log other exceptions if any
            Log::error('Error approving caregiver: ' . $exception->getMessage());
            return redirect()->back()->with('error', 'Error approving caregiver.');
        }
    }
}

