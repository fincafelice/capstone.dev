<?php

class SalesController extends \BaseController 
{

	public function __construct() 
	{

		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));

	}

	/**
	 * Display a listing of sales
	 *
	 * @return Response
	 */
	public function index()
	{    	
		// Eager load sales with tags
    	$query = Sale::with('tags');

		// If there is a search, perform a query looking for
		// sales with those associated tags.

		if (Input::has('search')) 
		{
			$search = Input::get('search');

			// $query->where('tags', 'like', '%' . $search . '%');

			$sales = Sale::whereHas('tags', function($q) use ($search) {

				$q->where('name', 'like', '%' . $search . '%');

			})->orderBy('created_at', 'desc')->paginate(10);
		} 

		else 
		{
			$sales = Sale::orderBy('created_at', 'desc')->paginate(5);
		}

		// return view with sales having a specific tag attached.
    	return View::make('sales.index')->with('sales', $sales);
	} 

	/**
	 * Show the form for creating a new sale
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = Tag::all();
		return View::make('sales.create')->with('tags', $tags);

		// return $this->saveSale($sale);
	}

	/**
	 * Store a newly created sale in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		try {
			$sale = new Sale();
			$sale->user_id = Auth::id();
		} catch (Exception $e) {
			Log::warning("User requested a sale event that does not exist.", array('id' => $id));
			App::abort(404);
		}
		return $this->saveSale($sale);
	}

	/**
	 * Display the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sale = Sale::findOrFail($id);

		return View::make('sales.show', compact('sale'));
	}

	/**
	 * Show the form for editing the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tags = Tag::all();
		$sale = Sale::findOrFail($id);

		return View::make('sales.edit')->with(compact('sale'))->with(compact('tags'));
	}

	/**
	 * Update the specified sale in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sale = Sale::findOrFail($id);

		return $this->saveSale($sale);
	}

	/**
	 * Remove the specified sale from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			$sale = Sale::findOrFail($id);
		} catch (Exception $e) {
			Log::warning('User requested a sale event that does not exist.');
			App::abort(404);
		}
		
		$sale->delete();
		Session::flash('successMessage', 'Sale deleted successfully!');

		return Redirect::action('UsersController@show', Auth::id());
	}


	protected function saveSale($sale) 
	{
		// dd(Input::all());

		$validator = Validator::make(Input::all(), Sale::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to save your garage sale!');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			$sale->sale_name      = Input::get('sale_name');
			$sale->sale_date_time = Input::get('sale_date_time');
			$sale->street_num 	  = Input::get('street_num');						
			$sale->street 	 	  = Input::get('street');
			$sale->city  		  = Input::get('city');
			$sale->state  		  = Input::get('state');
			$sale->zip  		  = Input::get('zip');
			$sale->country        = Input::get('country');
			$sale->latitude       = Input::get('latitude');
			$sale->longitude      = Input::get('longitude');
			$sale->address  	  = Input::get('address');
			$sale->description    = Input::get('description');
			$sale->user_id   	  = Auth::id();
			$sale->save();


			// Check for tags and add them to sale_tag pivot table.
			if (Input::has('tags')) {
				$tags = Input::get('tags');
				$tagsArray = explode(', ', $tags);

				// Unset empty strings from array.
				foreach ($tagsArray as $key => $value) {
					if ($value == '') {
						unset($tagsArray[$key]);
					}
				}

				// dd($tagsArray);
				foreach ($tagsArray as $tagName) {
					// dd($tagName);
					// find tag by name
					$tag = Tag::where('name', '=', $tagName)->first();
					// dd($tag->name);
					// create entry in pivot table with tag_id and sale_id
					DB::table('sale_tag')->insert(array('sale_id' => $sale->id, 'tag_id' => $tag->id));
				}
			}

			Session::flash('successMessage', 'Your garage sale was saved!');
		} 


		if (Input::hasFile('images')) {
			$files = Input::file('images');

			$imageMimeTypes = array('image/png', 'image/jpeg', 'image/gif', 'image/jpg');						
			
			foreach($files as $file) {	

				if (in_array($file->getMimeType(), $imageMimeTypes)) {
					$destinationPath = public_path() . '/uploads/';
	    			$filename = $file->getClientOriginalName();
	    			$upload_success = $file->move($destinationPath, $filename);
					$image = new Image();
		            $image->img_path = '/uploads/' . $filename;
		    		$image->sale_id = $sale->id;
		            $image->save();
				}
			}
		}

		
		return Redirect::action('SalesController@show', $sale->id);
  	}
}

