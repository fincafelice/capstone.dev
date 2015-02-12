<?php

class Tag extends \Eloquent {

	// Add your validation rules here
	public static $rules = array(

			'name' => 'required|max:50'
	);
		


	// Don't forget to fill this array
	protected $fillable = array('name');

	public function Sales()
    
    {
        return $this->belongsToMany('Sale');
    }


}