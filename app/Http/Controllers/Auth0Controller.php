<?php

/* namespace App\Http\Controllers;

 use Auth0\Login\Auth0Controller as BaseAuth0Controller; 
use Illuminate\Http\Request;

class Auth0Controller extends BaseAuth0Controller
{
    public function callback(Request $request)
    {
        
        $user = \Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Error al iniciar sesión con Auth0.');
        }

        return redirect()->route('main')->with('success', 'Inicio de sesión exitoso.');
    }
}  */

