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

Route::resource('sales', 'SalesController');

Route::resource('users', 'UsersController');

Route::resource('tags', 'TagsController');

Route::get('orm-test', function ()
{
    $sales = Sale::all();
	return $sales;
});

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');


