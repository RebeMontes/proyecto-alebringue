<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/home', 'home.home')->name('home');
Route::view('/login', 'pages.auth.login')->name('login');
Route::view('/dashboard', 'dashboard')->name('dashboard');  
Route::view('/lecciones', 'lecciones')->name('lecciones');
Route::view('/progreso', 'progreso')->name('progreso');
Route::view('/logros', 'logros')->name('logros');

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::view('/dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
