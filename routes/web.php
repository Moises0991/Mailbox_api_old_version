<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// authentification routes
Route::get('login/{type}', [loginController::class, 'index'])->middleware('guest')->name('login');
Route::post('sign_in', [loginController::class, 'auth_attempt'])->middleware('guest')->name('sign_in');
Route::post('sign_up', [registerController::class, 'create'])->middleware('guest')->name('sign_up');

// authentification with google
Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');
