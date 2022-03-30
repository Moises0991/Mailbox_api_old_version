<?php

use App\Http\Controllers\Sign_inController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// authentification routes

// Route::get('sign_in', [sign_inController::class, 'student'])->name('sign_in');
// Route::post('sign_in', [sign_inController::class, 'sorting'])->name('sign_in');
// Route::post('sign_in', [sign_inController::class, 'sorting'])->middleware('guest')->name('sign_in');
// Route::post('sign_up/{type}', [sign_upController::class, 'create'])->middleware('guest')->name('sign_up');


// Route::post('sign_in_student', [sign_inController::class, 'student'])->middleware('guest')->name('sign_in_student');
// Route::post('sign_up_administrator', [sign_upController::class, 'administrator'])->middleware('guest')->name('sign_in_administrator');


// authentification with google
// Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
// Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');
