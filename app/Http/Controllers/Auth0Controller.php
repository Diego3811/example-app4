<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth0\SDK\Auth0;
use Auth0\SDK\Configuration\SdkConfiguration;
use illuminate\support\Str;

class Auth0Controller extends Controller
{
    public $auth0; 

    public function __construct() {
        $configuration = new SdkConfiguration(
            domain: 'dev-i0rfs38c2vrffnui.us.auth0.com',
            clientId: 'vTiQ1nhWtg83UkYxE6SEyHo8K7rTA3rt',
            clientSecret: 'EUGNYuq3btrYIRqT5DCiww0lP-FKrHk1karUCsHRXx5vdgFOYauou8yKc9s9DneK',
            cookieSecret: Str::random(50),
            redirectUri:'http:localhost:8000/callback'
        );
       $this-> $auth0 = new Auth0($configuration);
    }

    public function auth0(){

        $session = $this->auth0->getCredentials();
        if (null === $session || $session->accessTokenExpired) {
        header('Location: ' . $auth0->login());
        exit;
}

    }
   public function callback(Request $request) {
    $input = $request->all();
    if (null !== this->auth0->getExchangeParameters()) {
        $auth0->exchange();
    }
    $user = $this->auth0->getCredentials()?->user;

    dd($user);
    }
}
