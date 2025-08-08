<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return view('welcome');
// });

// // More simple syntax: ideal for static pages
// Route::view('/second', 'second'); 

Route::view('/', 'pages.home');
Route::view('/contact-us', 'pages.contact')->name('contact');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/article/{id}', 'pages.article')->name('article');

// Route::get('/', function () {
//     $categories = DB::table('categories')->get();
//     return view('pages.home', ['categories' => $categories]); //we can use the categories in the component as data source
// });