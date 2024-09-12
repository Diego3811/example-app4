<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('Auth0',[Auth0Controller::class,'auth0']);
Route::get ('callback',[Auth0Controller::class,'callback']);