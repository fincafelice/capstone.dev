@extends('layouts.template')

@section('title')
	My Garage Sale - User Login
@stop


@section('content')
<div class="container">
	<h1>Welcome!</h1>
	<h3>Please log in to create or edit sale event</h3>
	<hr>
	<div>
		{{ Form::open(array('action' => 'HomeController@doLogin')) }}

			<div class="form-group">
				{{ Form::label('email', 'eMail Address') }}
				{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
			</div>

			<div class="form-group">
				{{ Form::submit('Log In!', array('class' => 'btn btn-primary')) }}
			</div>

		{{ Form::close() }}
	</div>
</div>
@stop