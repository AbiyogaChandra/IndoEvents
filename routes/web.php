<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

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