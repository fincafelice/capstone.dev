<?php

use Carbon\Carbon;

class Sale extends \Eloquent {

	protected $table = 'sales';

	// Don't forget to fill this array
	protected $fillable = array('street', 'apt', 'city', 'state', 'zip', 'sale_date_time', 'description', 'user_id');

	// Add your validation rules here
	public static $rules = array(

		'sale_name'      => 'required|max:200',
		'sale_date_time' => 'required',
		'street'         => 'required|max:100',
		'street_num'     => 'required|max:100',
		'city'           => 'required|max:50',
		'state'          => 'required|max:2',
		'zip'            => 'required|max:5',
		'country'        => 'required|max:100',
		'description'    => 'required|max:1000'

	);
	
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function images() {
    	return $this->hasMany('Image');
    }

}