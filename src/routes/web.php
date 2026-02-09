<?php

use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Register
Route::get('/register', [RegisterController::class, 'show'])
    ->name('register.show');

Route::post('/register', [RegisterController::class, 'execute'])
    ->name('register.execute');

// Login
Route::get('/login', [LoginController::class, 'show'])
    ->name('login.show');

Route::post('/login', [LoginController::class, 'execute'])
    ->name('login.execute');
