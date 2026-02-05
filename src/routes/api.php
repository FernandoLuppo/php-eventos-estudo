<?php

use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

Route::post('/register', RegisterController::class);
