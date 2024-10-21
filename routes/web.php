<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/events', function () {
    return view('events', [
        'currentRoute' => Route::currentRouteName(),
    ]);
})->name('events');

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/charts', function () {
    return view('admin.charts_chartjs');
});

Route::get('/tables', function () {
    return view('admin.tables');
});

Route::get('/tables_data', function () {
    return view('admin.tables_data');
});

Route::get('/form_elements', function () {
    return view('admin.form_elements');
});

Route::get('/form_advanced', function () {
    return view('admin.form_advanced');
});

Route::get('/icons', function () {
    return view('admin.icons');
});

Route::get('/buttons', function () {
    return view('admin.buttons');
});

Route::get('/notifications', function () {
    return view('admin.notifications');
});

Route::get('/progress', function () {
    return view('admin.progress');
});

Route::get('/tabs', function () {
    return view('admin.tabs');
});

Route::get('/api/register', [UserController::class, 'register'])->middleware('guest');

Route::get('/api/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/api/logout', [UserController::class, 'logout']);

Route::get('/auth/google/redirect', [UserController::class, 'redirectToGoogle'])->middleware('guest');

Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback'])->middleware('guest');

Route::get('/profiles', [ProfileController::class, 'index']);