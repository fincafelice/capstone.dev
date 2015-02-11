<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('username', 'email', 'password', 'street', 'apt', 'city', 'state', 'zip');

	public static $rules = array(

		'username'   			=> 'required|max:50',
		'email'     			=> 'required|max:100',
		'password'   			=> 'required|confirmed',
		'password_confirmation' => 'required',
		'street'      			=> 'required|max:100',
		'city'      			=> 'required|max:50',
		'state'     			=> 'required|max:2',
		'zip'      				=> 'required|max:5',
	);

	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $hidden = array('password', 'remember_token');
	

	public function setPasswordAttribute($value) {

		$this->attributes['password'] = Hash::make($value);

	}

}
