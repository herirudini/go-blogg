<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// More simple syntax: ideal for static pages
Route::view('/second', 'second'); 
