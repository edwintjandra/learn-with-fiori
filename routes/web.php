<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');
});

Route::get('/i', function () {
    return view('signin');
});

Route::get('/fiori',function(){
    return view('fiori');
});