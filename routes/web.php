<?php

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

Route::post('/login', [loginController::class, 'submit']);

Route::view('/home', 'Homepages.patienthome');

Route::post('/login', [loginController::class, 'submit']);

Route::view('/familyhome', 'Homepages.familyhome');

// signup routes
route::get('/signup', [signupcontroller::class,'index']);

Route::post('/signup', [SignupController::class, 'submit']);

Route::view('/pending-approval', 'Homwefind.pending_approval');