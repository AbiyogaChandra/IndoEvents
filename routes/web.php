<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MyEventsController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;

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

        Route::post('/review/{eventId}', [ReviewController::class, 'store'])
            ->name('review.store');

        Route::post('/comment/{event}', [CommentController::class, 'store'])
            ->name('comment.store');

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

        Route::get('/my-events', [MyEventsController::class, 'index'])
            ->name('my-events');

        Route::get('/view-event/{id}', [MyEventsController::class, 'viewEvent'])
            ->name('view-event');

        Route::get('/edit-event/{id}', [MyEventsController::class, 'editEvent'])
            ->name('edit-event');
        
        Route::get('/create-event', [RequestController::class, 'createRequest'])
            ->name('create-event');
           
        Route::post('/submit-request', [RequestController::class, 'storeRequest'])
            ->name('submit-request');
        
        Route::get('/payment/create/{event_id}', [TransactionController::class, 'createPayment'])
            ->name('payment.create');

        Route::get('/payment/update/{event_id}', [TransactionController::class, 'updateTransaction'])
            ->name('payment.update');

        Route::post('/user/update', [UserController::class, 'updateUser'])
            ->name('user.update');

        Route::post('/profile/update', [ProfileController::class, 'updateProfile'])
            ->name('profile.update');
    });

});
