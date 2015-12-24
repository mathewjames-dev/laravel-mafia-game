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
Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/// ADMIN ///
Route::get('admin', 'AdminController@index');
Route::post('roles', 'AdminController@createRole');
Route::post('admin/user', 'AdminController@editUser');
Route::post('admin/state', 'AdminController@setState');
Route::post('admin/gun', 'AdminController@makeGun');
Route::post('admin/armor', 'AdminController@makeArmor');
Route::post('admin/car', 'AdminController@makeCar');
Route::post('admin/location', 'AdminController@makeLocation');


/// PROFILE ///
Route::get('profile', 'ProfileController@index');
Route::get('editprofile', 'ProfileController@edit');
Route::get('profilearticles', 'ProfileController@articles');
Route::get('profile/{id}', 'ProfileController@show');
Route::patch('profile.profile/{id}', 'ProfileController@update');


/// SEARCH ///
Route::get('search', 'SearchController@index');
Route::post('search', 'SearchController@search');


/// CRIME ///
Route::get('crime', 'CrimeController@index');
Route::post('crime', 'CrimeController@crime');


/// JAIL ///
Route::get('jail', 'JailController@index');


/// BANK ///
Route::get('bank', 'BankController@index');
Route::post('bank/{user_name}', 'BankController@store');
Route::post('bank', 'BankController@withdraw');


/// INVENTORY ///
Route::get('inventory', 'InventoryController@index');


/// SHOP ///
Route::get('shop', 'ShopController@index');
Route::post('shop/weapon', 'ShopController@purchaseWeapon');
Route::post('shop/armor', 'ShopController@purchaseArmor');
Route::post('shop/car', 'ShopController@purchaseCar');


/// TRAVEL ///
Route::get('travel', 'TravelController@index');
Route::post('travel/location', 'TravelController@travel');


/// KILL ///
Route::get('kill', 'KillController@index');
Route::post('kill/{user_name}', 'KillController@killPlayer');