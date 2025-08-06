<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // More simple syntax: ideal for static pages
// Route::view('/second', 'second'); 

Route::view('/', 'pages.home');
Route::view('/contact-us', 'pages.contact')->name('contact');
Route::view('/about-us', 'pages.about')->name('about');
