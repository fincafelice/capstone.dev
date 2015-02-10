@extends('layouts.master')

@section('content')

   <h1> Update User!</h1>


    {{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' =>  'put')) }}
    

		@include('users.form')	


	{{ Form::submit('Save Changes', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}



    
@stop