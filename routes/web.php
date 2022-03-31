<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sign_inController;
use App\Http\Controllers\Sign_upController;

// authentification routes
Route::post('sign_in', [Sign_inController::class, 'auth'])->middleware('guest')->name('sign_in');
Route::post('sign_up', [Sign_upController::class, 'create'])->middleware('guest')->name('sign_up');

// authentification with google
// Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
// Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');
