<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class admincontroller extends Controller
{
    public function show()
    {
        $data=Roles::all();
        return view('/admin', compact('data'));
    }
}
