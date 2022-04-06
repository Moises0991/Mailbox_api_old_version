<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewUpqrooController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sign_inController;
use App\Http\Controllers\Sign_upController;


// authentification routes
Route::post('sign_in', [Sign_inController::class, 'auth'])->middleware('guest')->name('sign_in');
Route::post('sign_up', [Sign_upController::class, 'create'])->middleware('guest')->name('sign_up');
Route::get('sign_up', [Sign_upController::class, 'token'])->middleware('guest')->name('sign_up');
// authentification with google
// Route::get('/login-google', [loginController::class, 'redirectToGoogle'])->name('login-google');
// Route::get('/google-callback', [loginController::class, 'callbackFromGoogle'])->name('google-callback');
//rutas para las noticias
Route::post('new_upqroo', [NewUpqrooController::class, 'create'])->middleware('guest')->name('create');
Route::get('new_upqroo',[NewUpqrooController::class,'show'])->middleware('guest')->name('show');
Route::get('new_upqroo/edit/{id}', [NewUpqrooController::class, 'edit'])->middleware('guest')->name('edit');
Route::post('new_upqroo/update/{id}', [NewUpqrooController::class, 'update'])->middleware('guest')->name('update');
Route::get('new_upqroo/destroy/{id}', [NewUpqrooController::class, 'destroy'])->middleware('guest')->name('destroy');
//rutas comentarios
Route::post('comment_upqroo', [CommentController::class, 'create'])->middleware('guest')->name('create');
Route::get('comment_upqroo/{idNoticia}',[CommentController::class,'show'])->middleware('guest')->name('show');
