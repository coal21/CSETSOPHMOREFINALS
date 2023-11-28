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

    public function create(Request $request)
    {
        $role = Roles::create([
            'name' => $request->input('newRole'),
            'access_level' => $request->input('accessLV'),
        ]);
    }
}