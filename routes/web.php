<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FioriController;

Route::get('/', [UserController::class, 'signinPage'])->name('signinPage');
Route::post('/signin', [UserController::class, 'signin'])->name('signin');
 
Route::middleware(['auth'])->group(function(){
    //janlup bikin halaman profile 
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/fiori',[FioriController::class,'index'])->name('fiori.index');
    Route::post('/fiori',[FioriController::class,'handleMessage'])->name('fiori.handle.message');

});


Route::get('/csrf-token', function (Request $request) {
    return response()->json(['csrf_token' => csrf_token()]);
});

 