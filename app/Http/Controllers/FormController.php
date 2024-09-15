<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'apellidos' => 'required|string',
            'email' => 'required|email', 
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        User::create([
            'name' => $request->input('name'),
            'apellidos' => $request->input('apellidos'),
            'email' => $request->input('email'), 
            'password' => bcrypt($request->input('password')), 
        ]);

        
        return redirect()->route('welcome')->with('success', 'Datos registrados con éxito.');
    }
}
