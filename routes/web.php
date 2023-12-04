<?php

use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\patienthomecontroller;
use App\Http\Controllers\admincontroller;
<<<<<<< HEAD
=======
use App\Http\Controllers\rostercontroller;
>>>>>>> 98e5d9eb18d31ade57a6a6f14a53cdebb2eb6d15
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
route::get('/login', [loginController::class,'index']);

Route::post('/login', [LoginController::class, 'login'])->name('loginsubmit');

Route::get('/admin', [admincontroller::class,'show']);
Route::get('/admin-home', [LoginController::class, 'adminHome'])->name('admin.home');

Route::view('/home', 'Homepages.patienthome');

Route::view('/familyhome', 'Homepages.familyhome');

Route::get('/supervisor', [Supervisorcontroller::class,'show']);
Route::get('/supervisor-home', [LoginController::class, 'supervisorHome'])->name('supervisor.home');
// Route::view('/supervisor-home', 'Homwefind.supervisor')->name('supervisor.home');

Route::get('/doctor-home', [LoginController::class, 'doctorHome'])->name('doctor.home');

<<<<<<< HEAD
Route::view('/familyhome', 'Homepages.familyhome');
=======
Route::get('/caregiver-home', [LoginController::class, 'caregiverHome'])->name('caregiver.home');

Route::get('/patient-home', [LoginController::class, 'patientHome'])->name('patient.home');

Route::get('/family-home', [LoginController::class, 'familyHome'])->name('family.home');
>>>>>>> 98e5d9eb18d31ade57a6a6f14a53cdebb2eb6d15

Route::post("/approve", [admincontroller::class,"approveAccount"]);

Route::get("/awaiting", [admincontroller::class,"awaiting"]);


// signup routes
<<<<<<< HEAD
route::get('/signup', [signupcontroller::class,'index']);
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup/submit', [signupController::class, 'submit']);
=======
Route::get('/signup', [signupcontroller::class,'index']);

>>>>>>> 98e5d9eb18d31ade57a6a6f14a53cdebb2eb6d15
Route::post('/signup/submit', [SignupController::class, 'submit']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Appointment routes
Route::get('/doctorappointment', [doctorappointmentcontroller::class,'show']);
Route::get('/doctorappointment', [doctorappointmentcontroller::class,'appointmentsubmit'])->name('submit.appointment');