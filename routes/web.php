<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/google/redirect', [UserController::class, 'redirectToGoogle']);

Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback']);

Route::get('/profiles', [ProfileController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/my-events', function () {
    return view('my_events');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});