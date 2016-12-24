<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function() {
    return view('pages.index');
})->name('index');
Route::get('/login', function() {
    return view('pages.login');
})->name('login');
Route::get('/profile', function() {
    return view('pages.profile');
})->name('profile');
Route::get('/join', function() {
    return view('pages.join');
})->name('join');
