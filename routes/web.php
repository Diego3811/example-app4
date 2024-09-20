<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Auth\Auth0LoginController;

// Rutas de Autenticación con Auth0
Route::get('/login', [Auth0LoginController::class, 'login'])->name('login');
Route::get('/auth/callback', [Auth0LoginController::class, 'callback'])->name('auth0.callback');
Route::post('/logout', [Auth0LoginController::class, 'logout'])->name('logout');

// Ruta protegida por autenticación
Route::get('/main', function () {
    return view('main');
})->middleware('auth')->name('main');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/formulario', [FormController::class, 'store'])->name('store.form');

Route::get('/regis', function () {
    return view('regis');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/products', [ProductController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/regisprod', function () {
    return view('regisprod');
})->name('regisprod');


route::get('/demo', function () { 
    return view('demo');
     })->name('demo');