<?php

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

Route::get('/doctor-home', [LoginController::class, 'doctorHome'])->name('doctor.home');

Route::get('/caregiver-home', [LoginController::class, 'caregiverHome'])->name('caregiver.home');

Route::get('/supervisor', [Supervisorcontroller::class,'show']);

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
Route::post("/approve", [admincontroller::class,"approveAccount"]);

Route::get("/awaiting", [admincontroller::class,"awaiting"]);

Route::get('/search-patients', [admincontroller::class, 'searchPatients']);

Route::get('/signup', [signupcontroller::class,'index']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Appointment routes
Route::get('/doctorappointment', [doctorappointmentcontroller::class,'show']);

Route::get('/doctorappointment', [doctorappointmentcontroller::class,'appointmentsubmit'])->name('submit.appointment');

Route::get('/testing', [rostercontroller::class, 'schedule']);



Route::view('/aboutus', 'Homwefind.aboutus');
Route::view('/contactus', 'Homwefind.contactus');
Route::view('/review', 'Homwefind.review');