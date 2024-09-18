<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function demo(Request $request){     
        //  echo("hola");
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // echo($credentials['email']);
       
            return view('main');
      
        
    }
    


    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

           
            return redirect()->intended('main');
        }

       
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

   
    public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

      
        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        
        Auth::login($user);

        
        return redirect()->route('main');
    }

    
    public function logout(Request $request)
    {
        Auth::logout();

       
        $request->session()->invalidate();

        
        $request->session()->regenerateToken();

        
        return redirect('/login');
    }
}


