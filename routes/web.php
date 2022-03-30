<?php
use App\Http\Controllers\SignInAdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\Sign_inController;

Route::get('/', function () {
    return view('welcome');
});


// authentification routes
Route::get('sign_in', [Sign_inController::class, 'sorting'])->middleware('guest')->name('sign_in');
Route::post('sign_up', [Sign_upController::class, 'sorting'])->middleware('guest')->name('sign_up');


Route::get('sign_in_student', [Sign_inController::class, 'student'])->middleware('guest')->name('sign_in_student');
Route::get('sign_in_admin', [sign_inController::class, 'admin'])->middleware('guest')->name('sign_in_admin');
Route::post('sign_up_student', [sign_upController::class, 'student'])->middleware('guest')->name('sign_in_student');
Route::post('sign_up_admin', [sign_upController::class, 'admin'])->middleware('guest')->name('sign_in_admin');



// authentification with google
Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');
