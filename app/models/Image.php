<?php

class Image extends \Eloquent {

	protected $table = 'images';

	protected $fillable = array('img_path');

	public static $rules = array(
		'img_path' => 'required|max:50',
	);

	public function sale() {
		return $this->belongsTo('Sale');
	}

}