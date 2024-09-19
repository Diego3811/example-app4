<?php

namespace App\Http\Controllers\Auth;

use Auth0\Login\Auth0Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Auth0LoginController extends Auth0Controller
{
    /**
     * Overriding Auth0's callback method to handle user creation and login.
     */
    public function callback()
    {
        $auth0User = $this->getUser();

        // Verificar si el usuario ya existe
        $user = User::where('email', $auth0User['email'])->first();

        if (!$user) {
            // Crear un nuevo usuario
            $user = User::create([
                'name' => $auth0User['name'] ?? 'Nombre',
                'apellidos' => $auth0User['family_name'] ?? 'Apellidos',
                'email' => $auth0User['email'],
                // Generar una contraseña aleatoria ya que Auth0 maneja la autenticación
                'password' => Hash::make(str_random(24)),
            ]);
        }

        // Iniciar sesión al usuario
        Auth::login($user, true);

        // Redirigir al usuario a la página deseada
        return redirect()->intended('/main');
    }
}
