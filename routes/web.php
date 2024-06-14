<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('/', [UserController::class, 'signup'])->name('signup');
Route::get('/signin', [UserController::class, 'signinPage'])->name('signinPage');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::middleware('auth')->post('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::get('/app',function(){
    return view('app');
});

Route::get('/fiori',function(){
    return view('fiori');
});