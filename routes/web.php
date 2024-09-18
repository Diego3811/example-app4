<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use Auth0\Login\Auth0Controller;



use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'store'])->name('store.form');

// Ruta para la página principal después del registro
Route::get('/main', function () {
    return view('main');
})->name('main');





Route::get('/login', [Auth0Controller::class, 'login'])->name('login');
Route::get('/logout', [Auth0Controller::class, 'logout'])->name('logout');
Route::get('/auth/callback', [Auth0Controller::class, 'callback']);




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
