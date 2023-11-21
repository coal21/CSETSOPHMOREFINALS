<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Roles;

class admincontroller extends Controller
{
    public function show()
    {
<<<<<<< HEAD
        $data=Roles::all();
        return view('/admin', compact('data'));
=======
        $roles = Roles::all();
        return view('Homwefind.admin', ['roles' => $roles]);
>>>>>>> bcf9854e59c553766458e45124cc9f77df5bcd74
    }
}
