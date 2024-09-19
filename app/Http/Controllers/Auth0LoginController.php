<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller; // Extends Controller not Auth0Controller

class Auth0LoginController extends Controller
{
    /**
     * Redirects to Auth0 for authentication
     */
    public function login()
    {
        // This will redirect the user to Auth0's login page
        return redirect()->route('auth0.callback');
    }

    /**
     * Handles the Auth0 callback
     */
    public function callback()
    {
        // Obtain the user data from Auth0
        $auth0User = auth()->user(); // Make sure to set up the Auth0 middleware
        
        // Check if the user already exists in the local database
        $user = User::where('email', $auth0User->email)->first();

        if (!$user) {
            // Create a new user if they don't exist
            $user = User::create([
                'name' => $auth0User->name ?? 'Nombre',
                'apellidos' => $auth0User->family_name ?? 'Apellidos',
                'email' => $auth0User->email,
                'password' => Hash::make(Str::random(24)),  // Generate random password
            ]);
        }

        // Log the user into your Laravel app
        Auth::login($user, true);

        // Regenerate the session to prevent session fixation attacks
        session()->regenerate();

        // Redirect the user to the intended page
        return redirect()->intended('/main');
    }
}



