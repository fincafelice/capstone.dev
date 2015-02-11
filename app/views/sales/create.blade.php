@extends('layouts.master')

@section('title')
	My Garage Sale - New Sale
@stop


@section('content')
	<h1>Welcome!</h1>
	<h3>Create a New Sale</h3>
	<hr>
	<div>
		{{ Form::open(array('action' => 'SalesController@store', 'method' => 'sale')) }}


			@include('sales.form')
			

		{{ Form::submit('Create Sale', array('class' => 'btn btn_primary')) }}

		{{ Form::close() }}
	</div>
@stop