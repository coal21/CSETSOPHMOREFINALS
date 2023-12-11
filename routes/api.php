<?php

use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\rostercontroller;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\logincontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/updatePayment", [PaymentController::class, 'update']);

