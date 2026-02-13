<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\GetOneController;

use Illuminate\Support\Facades\Route;

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

// Get User
Route::get('/get-user/{uuid}', [GetOneController::class, 'show'])
    ->name('get-user.show');

