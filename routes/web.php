<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Guest Routes 
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'requireLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'requireRegister'])->name('register');

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});

// Authenticated Routes 
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('dashboard'); 
    })->name('dashboard');
    
});