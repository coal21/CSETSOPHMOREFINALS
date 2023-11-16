<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index()
    {
        return view('Homwefind.login');
    }

    public function submit(Request $request)
    {
        // Handle form
        return view('Homwefind.Admin_home');
    }

    public function family(Request $request)
    {
        // Handle form
        return view('Homwefind.familyhome');
    }
}
