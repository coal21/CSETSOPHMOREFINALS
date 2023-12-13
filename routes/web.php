<?php

use App\Http\Controllers\FindRosterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\caregivercontroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\patienthomecontroller;
use App\Http\Controllers\patientsearchcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\caregiverhomecontroller;
use App\Http\Controllers\rostercontroller;
use App\Http\Controllers\doctorappointmentcontroller;
use App\Http\Controllers\employeecontroller;
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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/admin', [admincontroller::class,'show']);

Route::get('/admin-home', [LoginController::class, 'adminHome'])->name('admin.home');

// Route::get('/doctor', [admincontroller::class,'show']);

Route::get('/doctor-home', [LoginController::class, 'doctorHome'])->name('doctor.home');

Route::get('/caregiver-home', [LoginController::class, 'caregiverHome'])->name('caregiver.home');

// Route::get('/supervisor', [Supervisorcontroller::class,'show']);

Route::get('/supervisor-home', [LoginController::class, 'supervisorHome'])->name('supervisor.home');

Route::get('/patient-home', [LoginController::class, 'patientHome'])->name('patient.home');

Route::get('/family-home', [LoginController::class, 'familyHome'])->name('family.home');

Route::post("/approve", [admincontroller::class,"approveAccount"]);

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/contactus', [ContactController::class, 'index'])->name('contactus');



Route::view('/roster', [rostercontroller::class, 'showRosterForm'])->name('roster.form');
Route::post('/createRoster', [rostercontroller::class, 'createRoster'])->name('createRoster');
Route::get('/filterRosters', [rostercontroller::class, 'filterRosters'])->name('filterRosters');
Route::post('/filterRosters', [rostercontroller::class, 'filterRosters'])->name('filterRosters');
Route::get('/Homwefind/roster', [rostercontroller::class, 'ShowRosterForm'])->name('Homwefind.roster');

Route::get('/findroster', [FindRosterController::class, 'showtheRosterForm'])->name('showRosterForm');
Route::post('/filtertheRosters', [FindRosterController::class, 'filtertheRosters'])->name('Homwefind.filtertheRosters');
Route::get('/Homwefind/FindRoster', [FindRosterController::class, 'ShowRosterForm'])->name('Homwefind.FindRoster');
Route::view('/roster', [FindRosterController::class, 'showRosterForm'])->name('FindRoster.form');
Route::post('/filterrosters', [FindRosterController::class, 'filtertheRosters'])->name('filtertheRosters');


Route::post("/createPrescription", [PrescriptionController::class, "createPrescription"]);


// Role creation

Route::post("/createRole", [admincontroller::class, 'createRole']);


// signup routes
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup/submit', [signupController::class, 'submit']);


route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Admin Routes
Route::post("/approve", [admincontroller::class,"approveAccount"]);

Route::get("/awaiting", [admincontroller::class,"awaiting"]);

Route::get('/admin/search-patients', [admincontroller::class, 'adminsearchPatients']);

Route::get('/signup', [signupcontroller::class,'index']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');

// Supervisor Routes
Route::post("/supervisor/approve", [supervisorcontroller::class,"approveAccount"]);

Route::get('/supervisor/search-patients', [supervisorcontroller::class, 'supervisorsearchPatients']);

// Doctor routes
Route::get('/doctor/search-patients', [doctorcontroller::class, 'doctorsearchPatients']);
Route::get('/patientsearch', [admincontroller::class, 'search']);
// Appointment routes
Route::get('/doctorappointment', [doctorappointmentcontroller::class,'show']);

// FIXED STUFF - DEXTER
Route::get('/appointments', [doctorappointmentcontroller::class,'show']);
Route::post("/submitAppointment", [doctorappointmentcontroller::class,"submitAppointment"]);

Route::get("/approvals", [registrationapprovalcontroller::class, "show"]);

Route::get("/rosters", [rostercontroller::class,"showRosterForm"]);