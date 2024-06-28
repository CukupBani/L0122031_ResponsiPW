<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route resource for pegawais, digunakan untuk keperluan CRUD
Route::resource('/pegawais', \App\Http\Controllers\PegawaiController::class);

Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'registerForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/notification', [UserController::class, 'notificationPage'])->name('notification');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('welcome');
});
