<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
});

Route::get('/profiles', [ProfileController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('register');
});

Route::get('/my-events', function () {
    return view('my_events');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});