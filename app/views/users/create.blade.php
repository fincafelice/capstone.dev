
@extends('layouts.template')


@section('topscript')

	<link rel="stylesheet" href="/css/bootstrap-markdown.min.css">

@stop

@section('content')

	<div class="col-md-8">
	    <h1>Welcome!</h1>
	    <h3>Enter your credentials to create a new user</h3>
	    <hr>
	    <div>

	    {{ Form::open(array('action' => 'UsersController@store', 'method' => 'user')) }}


			@include('users.form')	


		{{ Form::submit('Create User', array('class' => 'btn btn_primary')) }}

			
		{{ Form::close()  }}
		
		</div>
	</div>
@stop

@section('bottomscript')

<script src= "/js/bootstrap-markdown.js"></script>

@stop

