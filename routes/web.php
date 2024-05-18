<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación generadas por Breeze
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('videojuegos', VideojuegoController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
