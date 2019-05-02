<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guest-home', function () {
    return view('guest-home');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/stadium-profile', function () {
    return view('stadium-profile');
});

Route::get('/create-profile', function () {
    return view('create-profile');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

