<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin() {

		return View::make('login');
	}


	public function doLogin() {

		$input = Input::all();

		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {

			Session::flash('successMessage', "Login successful - welcome!");
    		return Redirect::intended('/');
    				return Redirect::route('users.index');


		} else {

			Session::flash('errorMessage', "Login failed, please re-enter credentials.");
    		return Redirect::back();
		};
	}

	public function doLogout() {

		Auth::logout();
		Session::flash('successMessage', "Have a nice day!");
		return Redirect::to('/login');
	}

}
