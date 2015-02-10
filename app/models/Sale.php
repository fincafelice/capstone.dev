<?php

class Sale extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function uploadFile($file) 
    {
    	$uploadPath = public_path() . '/uploads';
		$fileName = $this->id . '-' . $file->getClientOriginalName();

        return $fileName;

    }

}