@extends('layouts.master')

@section('content')

<h2>Update Sale Event</h2>

{{ Form::model($sale, array('action' =>array('SalesController@update', $sale->id), 'method'=> 'put', 'files' => true)) }}
	@include('sales.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop

<div>
	{{ Form::label('image', 'Sale Event Image') }}<br>
	{{ Form::file('image', array('class' => 'form-control')) }}
	{{ $errors->first('image', '<p class-"help-block">:message</p>') }}
</div>