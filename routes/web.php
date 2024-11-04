<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::redirect('/admin/login', '/login')->middleware('admin');

Route::middleware(['restrictAdmin'])->group(function () {
    Route::get('/', function () {
        return view('index', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })->name('home');

    Route::get('/home', function () {
        return view('index', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })->name('home');

    Route::get('/events', function () {
        return view('events', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })->name('events');

    Route::get('/event', function () {
        return view('event');
    });

    Route::get('/settings', function () {
        return view('settings');
    });

    Route::get('/login', function () {
        return view('login');
    })->middleware('guest');

    Route::get('/register', function () {
        return view('register');
    })->middleware('guest');

    Route::get('/api/register', [UserController::class, 'register'])->middleware('guest');

    Route::get('/api/login', [UserController::class, 'login'])->middleware('guest');

    Route::get('/auth/google/redirect', [UserController::class, 'redirectToGoogle'])->middleware('guest');

    Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback'])->middleware('guest');

    Route::get('/profiles', [ProfileController::class, 'index']);
});

Route::get('/api/logout', [UserController::class, 'logout'])->middleware('user');