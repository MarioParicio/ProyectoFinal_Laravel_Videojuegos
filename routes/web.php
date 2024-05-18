<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;

// Ruta principal de la aplicación
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas de autenticación
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('videojuegos', VideojuegoController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
