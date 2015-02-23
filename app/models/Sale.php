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
		'address'		 => 'required|max:255',
		'description'    => 'required|max:1000'

	);
	
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function images() 
    {
    	return $this->hasMany('Image');
    }


	public function summarizeDescription($summary = false) 
	{
			$description = $this->description;

			if ($summary == true) {

				$description = str_limit($description, 100);

				if (strlen($description) > 100) {

					$description = $description . "...";
				}
			}

		return $description;
	}

	public function getDates()
	{
	    return array('created_at', 'updated_at', 'sale_date_time');
	}

	public function setSaleDateTimeAttribute($value)
	{
		$this->attributes['sale_date_time'] = Carbon::createFromFormat('F jS Y, g:i a', $value);
	}
}	

