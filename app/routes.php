<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('hello', function()
{
	return View::make('hello');
});


Route::resource('sales', 'SalesController');

Route::resource('users', 'UsersController');

Route::resource('tags', 'TagsController');

// Login/Logout Views: 

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

// This Route Is For Troubleshooting Login Authentication

Route::get('checkID', function () {
	dd(Auth::id());
});


// These Routes Are For Google Maps API Work

Route::get('/map', 'HomeController@showMap');

Route::get('/map-test-form', 'HomeController@mapForm');


Route::get('tips', 'HomeController@showTips');

Route::get('about', 'HomeController@showAbout');
