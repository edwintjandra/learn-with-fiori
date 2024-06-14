<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/i', function () {
    return view('signin');
});
Route::get('/', [UserController::class, 'index']);
Route::post('/', [UserController::class, 'signup'])->name('signup');

Route::get('/app',function(){
    return view('app');
});