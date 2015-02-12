<?php

class SalesController extends \BaseController {

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
    	$sales = Sale::with('tags');

		// If there is a search, perform a query looking for
		// sales with those associated tags.

		if (Input::has('search')) {
			$search = Input::get('search');
			$sales = Sale::whereHas('tags', function($query) use ($search) {
				$query->where('name', '=', $search);
			})->get();

		} else {
    		$sales = Sale::all();
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
		return View::make('sales.create');
		return $this->saveSale($sale);
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
			$sale->seller_id = Auth::id();
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
		$sale = Sale::findOrFail($id);

		return View::make('sales.edit')->with('sale', $sale);
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

		Session::flash('successMessage', 'Sale Event deleted!');

		return Redirect::action('SalesController@index');
	}


	protected function saveSale($sale)
	{
		$validator = Validator::make(Input::all(), Sale::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to save your garage sale!');
			return Redirect::back()->withInput()->withErrors($validator);

		} else {

			Session::flash('successMessage', 'Your garage sale was saved!');
			$sale->sale_name      = Input::get('sale_name');						
			$sale->street 	 	  = Input::get('street');
			$sale->apt   		  = Input::get('apt');
			$sale->city  		  = Input::get('city');
			$sale->state  		  = Input::get('state');
			$sale->zip  		  = Input::get('zip');
			$sale->sale_date_time = Input::get('sale_date_time');
			$sale->description    = Input::get('description');
			$sale->seller_id 	  = Auth::id();
			$sale->save();
		} 

		if (Input::hasFile('images')) {
			$image = new Image();

			$files = Input::file('images');
			// dd($files);
			foreach($files as $file) {
			$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg'
		 	$validator = Validator::make(array('file'=> $file), $rules);
	  			
	  			if($validator->passes()){
					$destinationPath = public_path() . '/uploads/';
	    			$filename = $file->getClientOriginalName();
	    			$upload_success = $file->move($destinationPath, $filename);
					
	                $image->img_path = '/uploads/' . $filename;
	    			// dd($sale);
	    			$image->sale_id = $sale->id;
	                $image->save();
					Session::flash('success', 'Upload successfully'); 
					return Redirect::action('SalesController@show', $sale->id);
	  			} else {
    				return Redirect::to('upload')->withInput()->withErrors($validator);
				}
			}
  		}
	}
}
