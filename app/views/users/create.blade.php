@extends('layouts.master')


@section('top-script')

	<link rel="stylesheet" href="/css/bootstrap-markdown.min.css">

@stop

@section('content')

    <h1> Users!</h1>


    {{ Form::open(array('action' => 'UsersController@store', 'method' => 'user')) }}


		@include('users.form')	


	{{ Form::submit('Create user', array('class' => 'btn btn_primary')) }}

		
	{{ Form::close()  }}

@stop

@section('bottom-script')

<script src= "/js/bootstrap-markdown.js"></script>

@stop