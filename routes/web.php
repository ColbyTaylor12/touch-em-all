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

Route::get('/stadium-profile', 'StadiumProfileController@getStadiumProfile');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-profile', function () {
    return view('create-profile');
});

Route::get('/create-experience', function () {
    return view('create-experience');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::resource('/create_profile', 'UserProfileController');
Route::resource('/edit_profile', 'UserProfileController');

Route::resource('/create_experience', 'ExperienceController');

Route::get('/profile-experiences', 'ExperienceController@show');

Route::get('/user-profile', 'UserProfileController@show');

Route::get('/profile-stadium', 'StadiumController@show');

Route::get('/profile-experience', 'ExperienceController@index');
Route::get('/stadium-experience', 'ExperienceController@getStadiumexp');




