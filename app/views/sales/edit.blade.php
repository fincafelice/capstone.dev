@extends('layouts.master')

@section('content')

<h2>Update Sale Event</h2>

{{ Form::model($sale, array('action' =>array('SalesController@update', $sale->id), 'method'=> 'put', 'files' => true)) }}
	
	{{ Form::file('images[]', array('multiple'=>true)) }}

	@include('sales.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

