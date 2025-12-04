<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'RequireLogin'])->name('login');
    Route::get('/register', [AuthController::class, 'RequireRegister'])->name('register');

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

});