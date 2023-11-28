<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\doctorappointmentcontroller;
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
route::get('/login', [loginController::class,'index']);

Route::post('/login', [loginController::class, 'submit']);

Route::view('/home', 'Homwefind.home');

Route::post('/login', [loginController::class, 'submit']);

Route::view('/familyhome', 'Homwefind.familyhome');

// signup routes
route::get('/signup', [signupController::class,'index']);

Route::post('/signup', [SignupController::class, 'submit']);

Route::view('/pending-approval', 'Homwefind.pending_approval');

// Admin Page
Route::get('/admin',[adminController::class,'show']);
Route::post('/create_access_level',[adminController::class,'create']);

// Doctor's Appointment
Route::post('/create_Appointment',[doctorappointmentcontroller::class,'create']);


