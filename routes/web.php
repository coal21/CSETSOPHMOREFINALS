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
route::get('/login', [loginController::class,'index']);

Route::post('/login', [LoginController::class, 'login'])->name('loginsubmit');

Route::get('/admin-home', [LoginController::class, 'adminHome'])->name('admin.home');

Route::view('/home', 'Homepages.patienthome');

Route::view('/familyhome', 'Homepages.familyhome');

Route::get('/admin', [admincontroller::class,'show']);

// signup routes
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup/submit', [SignupController::class, 'submit']);

Route::view('/pending-approval', 'Homwefind.pending_approval');