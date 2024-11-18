<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EventController;

Route::redirect('/admin/login', '/login')
    ->middleware('admin');

Route::get('/api/logout', [UserController::class, 'logout'])
    ->name('logout')
    ->middleware('user');

//
// RestrictAdmin Middleware
//
Route::middleware(['restrictAdmin'])->group(function () {

    Route::get( '/', [EventController::class, 'home'])
        ->name('home');

    Route::get( '/home', [EventController::class, 'home'])
        ->name('home');

    Route::get('/events', [EventController::class, 'index'])
        ->name('events');

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

        Route::get('/settings/profile', function () {
            return view('settings.profile');
        })
        ->name('settings.profile');

        Route::get('/settings/account', function () {
            return view('settings.account');
        })
        ->name('settings.account');

        Route::get('/settings/security', function () {
            return view('settings.security');
        })
        ->name('settings.security');

        Route::get('/settings/transaction', [TransactionController::class, 'index'])
            ->name('settings.transaction');
    
        Route::get('/my-events', function () {
            return view('my-events', [
                'currentRoute' => Route::currentRouteName(),
            ]);
        })
        ->name('my-events');
        
        Route::get('/payment/create/{event_id}', [TransactionController::class, 'createPayment'])
            ->name('payment.create');

        Route::get('/payment/update/{event_id}', [TransactionController::class, 'updateTransaction'])
            ->name('payment.update');
    });

});
