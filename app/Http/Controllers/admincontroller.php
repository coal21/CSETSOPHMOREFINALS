<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Roles;

class admincontroller extends Controller
{
    public function show()
    {
        $roles = Roles::all();
        return view('Homwefind.admin', ['roles' => $roles]);
    }
}