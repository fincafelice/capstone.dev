<?php

class Sale extends \Eloquent {

	protected $table = 'sales';

	// Don't forget to fill this array
	protected $fillable = array('street', 'apt', 'city', 'state', 'zip', 'description', 'seller_id');

	// Add your validation rules here
	public static $rules = array(

		'street'      => 'required|max:100',
		'city'        => 'required|max:50',
		'state'       => 'required|max:2',
		'zip'         => 'required|max:5',
		'description' => 'required|max:500',
		'seller_id'   => 'required|max:20'
	);


}