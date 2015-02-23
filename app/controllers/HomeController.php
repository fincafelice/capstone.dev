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

	public function showTips() {

		return View::make('tips');
	}

	public function showAbout() {

		return View::make('about');
	}



	// Maps API Testing
	public function showMap() {

		return View::make('map');
	}


	public function mapForm () {

		$tags = Tag::all();
		return View::make('map-test-form')->with('tags', $tags);
	}


	// Template Testing

	public function testTemplate() {

		return View::make('template-test');
	}


	public function htmlTemplate() {

		return View::make('template-test.html');
	}

	public function test() {
		$sales = Sale::all();
		return View::make('test')->with('sales', $sales);
	}



	public function doLogin() {

		$input = Input::all();

		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {

			Session::flash('successMessage', "Login successful - welcome!");

    		return Redirect::action('UsersController@show', Auth::id());


		} else {

			Session::flash('errorMessage', "Login failed, please re-enter credentials.");
    		return Redirect::back();
		};
	}

	public function doLogout() {

		Auth::logout();
		Session::flash('successMessage', "Thanks for visiting!");
		return Redirect::to('/login');
	}

}
