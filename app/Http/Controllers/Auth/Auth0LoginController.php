<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth0\Laravel\Facade\Auth0;

class Auth0LoginController extends Controller
{
    /**
     * Redirige al usuario a la página de autenticación de Auth0.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return Auth0::login();
    }

    /**
     * Maneja el callback de Auth0 después de la autenticación.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback()
    {
        return Auth0::loginCallback();
    }

    /**
     * Cierra la sesión del usuario en la aplicación y en Auth0.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth0::logout();
        return redirect('/');
    }
}
