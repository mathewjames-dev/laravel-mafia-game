<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function() {
    return view('auth.login');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('admin', 'AdminController@index');
Route::post('roles', 'AdminController@createRole');
Route::post('admin', 'AdminController@editUser');
Route::post('admin', 'AdminController@setState');

/// Profile ///
Route::get('profile', 'ProfileController@index');
Route::get('editprofile', 'ProfileController@edit');
Route::get('profilearticles', 'ProfileController@articles');
Route::get('profile/{id}', 'ProfileController@show');
Route::patch('profile.profile/{id}', 'ProfileController@update');

Route::get('search', 'SearchController@index');
Route::post('search', 'SearchController@search');

Route::get('crime', 'CrimeController@index');
Route::post('crime', 'CrimeController@crime');

Route::get('jail', 'JailController@index');
