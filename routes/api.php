<?php

use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// signup
Route::post('/signup', [SignupController::class, 'submit']);

// login

Route::post('/login', [loginController::class, 'submit']);

Route::post('/login', [loginController::class, 'submit']);