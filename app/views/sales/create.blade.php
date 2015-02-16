@extends('layouts.master')

@section('title')
	My Garage Sale - New Sale
@stop


@section('content')

	<div class="col-md-5"> <!-- begin left container -->
    	<div class="page-header">
       		<h1>Create New Sale</h1>
    	</div>

		<div>
			{{ Form::open(array('action' => 'SalesController@store', 'method' => 'sale')) }}


				@include('sales.form')
				

			{{ Form::submit('Create Sale', array('class' => 'btn btn_primary')) }}

			{{ Form::close() }}
		</div>
	</div>

	<div class="col-md-6"> <!-- begin left container -->
    	<div class="page-header">
       		<h1>Tagegories Plus Cool Map!</h1>
    	</div>
	
		<p>Here's your stuff<p>
	</div>
@stop