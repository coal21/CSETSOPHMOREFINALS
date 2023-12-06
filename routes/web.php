<?php

use App\Http\Controllers\doctorController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\patienthomecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\rostercontroller;
use App\Http\Controllers\doctorappointmentcontroller;
use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\registrationapprovalcontroller;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

route::get('/home', [landingcontroller::class,'index']);


// Login Routes
route::get('/login', [logincontroller::class,'index']);

Route::post('/login', [LoginController::class, 'login'])->name('loginsubmit');

Route::get('/admin', [admincontroller::class,'show']);

Route::get('/admin-home', [LoginController::class, 'adminHome'])->name('admin.home');

Route::get('/doctor', [admincontroller::class,'show']);

Route::get('/doctor-home', [LoginController::class, 'doctorHome'])->name('doctor.home');

Route::get('/caregiver-home', [LoginController::class, 'caregiverHome'])->name('caregiver.home');

Route::get('/supervisor-home', [LoginController::class, 'supervisorHome'])->name('supervisor.home');

Route::get('/patient-home', [LoginController::class, 'patientHome'])->name('patient.home');

Route::get('/family-home', [LoginController::class, 'familyHome'])->name('family.home');

Route::post("/approve", [admincontroller::class,"approveAccount"]);

Route::post("/createRoster", [rostercontroller::class,"createRoster"]);

Route::post("/createPrescription", [PrescriptionController::class, "createPrescription"]);

// signup routes
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup/submit', [signupController::class, 'submit']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Admin Routes
Route::post("/admin/approve", [admincontroller::class,"approveAccount"]);

Route::get("/awaiting", [admincontroller::class,"awaiting"]);

Route::get('/admin/search-patients', [admincontroller::class, 'adminsearchPatients']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Supervisor Routes
Route::post("/supervisor/approve", [supervisorcontroller::class,"approveAccount"]);

Route::get('/supervisor/search-patients', [supervisorcontroller::class, 'supervisorsearchPatients']);

// Doctor routes
Route::get('/doctor/search-patients', [doctorcontroller::class, 'doctorsearchPatients']);

// Appointment routes
Route::get('/doctorappointment', [doctorappointmentcontroller::class,'show']);
