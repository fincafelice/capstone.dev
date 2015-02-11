@extends('layouts.master')


@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap-markdown.min.css">

@stop

@section('content')

    <h1>Welcome!</h1>
    <h3>Enter your credentials to create a new user</h3>
    <hr>
    <div>

    {{ Form::open(array('action' => 'UsersController@store', 'method' => 'user')) }}


		@include('users.form')	


	{{ Form::submit('Create User', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}
	
	</div>

@stop

@section('bottom-script')

<script src= "/js/bootstrap-markdown.js"></script>

@stop