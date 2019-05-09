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

// Route::get('/stadium-list', function () {
//     return view('stadium-list');
// });

Route::get('/stadium-list', 'StadiumController@getAllStadiums');

Route::get('/teams', 'TeamController@index');

Route::get('/team', 'TeamController@show');

Route::get('/stadium-profile/{id}', 'StadiumProfileController@show');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-profile', function () {
    return view('create-profile');
});

Route::resource('create_profile', 'UserProfileController');



