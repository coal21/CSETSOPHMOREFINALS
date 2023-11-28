<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\landingcontroller;
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

Route::get('/admin-home', [LoginController::class, 'adminHome'])->name('admin.home');

Route::view('/admin-home', 'Homepages.adminhome')->name('admin.home');

Route::get('/supervisor-home', [LoginController::class, 'supervisorHome'])->name('supervisor.home');

Route::view('/supervisor-home', 'Homepages.supervisorhome')->name('supervisor.home');

Route::get('/doctor-home', [LoginController::class, 'doctorHome'])->name('doctor.home');

Route::view('/doctor-home', 'Homepages.doctorhome')->name('doctor.home');

Route::get('/caregiver-home', [LoginController::class, 'caregiverHome'])->name('caregiver.home');

Route::view('/caregiver-home', 'Homepages.caregiverhome')->name('caregiver.home');

Route::get('/patient-home', [LoginController::class, 'patientHome'])->name('patient.home');

Route::view('/patient-home', 'Homepages.patienthome')->name('patient.home');

Route::get('/family-home', [LoginController::class, 'familyHome'])->name('family.home');

Route::view('/family-home', 'Homepages.patienthome')->name('family.home');


// signup routes
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup/submit', [signupController::class, 'submit']);

route::redirect('/pending-approval', 'Homwefind.pending_approval');