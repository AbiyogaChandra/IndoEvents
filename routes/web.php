<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/auth/google/redirect', [UserController::class, 'redirectToGoogle']);

Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback']);

Route::get('/profiles', [ProfileController::class, 'index']);