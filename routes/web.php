<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EventController;

Route::redirect('/admin/login', '/login')
    ->middleware('admin');

Route::get('/api/logout', [UserController::class, 'logout'])
    ->middleware('user');

//
// RestrictAdmin Middleware
//
Route::middleware(['restrictAdmin'])->group(function () {

    Route::get('/', function () {
        return view('index', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })
    ->name('home');

    Route::get('/home', function () {
        return view('index', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })
    ->name('home');

    /*Route::get('/events', function () {
        return view('events', [
            'currentRoute' => Route::currentRouteName(),
        ]);
    })
    ->name('events');*/

    Route::get('/events', [EventController::class, 'index'])->name('events');

    Route::get('/event/{id}', [EventController::class, 'show'])
        ->name('event.show');

    //
    // Guest Middleware
    //
    Route::middleware(['guest'])->group(function () {
        Route::get('/register', function () {
            return view('register');
        })
        ->name('register');

        Route::get('/login', function () {
            return view('login');
        })
        ->name('login');

        Route::post('/api/register', [UserController::class, 'register']);

        Route::post('/api/login', [UserController::class, 'login']);

        Route::get('/auth/google/redirect', [UserController::class, 'redirectToGoogle']);

        Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback']);
    });

    //
    // User Middleware
    //
    Route::middleware(['user'])->group(function () {

        Route::get('/settings', function () {
            return view('settings');
        })
        ->name('settings');
    
        Route::get('/my-events', function () {
            return view('my-events', [
                'currentRoute' => Route::currentRouteName(),
            ]);
        })
        ->name('my-events');
        
        Route::get('/payment', [TransactionController::class, 'createPayment'])
            ->name('payment.create');
    });

});
