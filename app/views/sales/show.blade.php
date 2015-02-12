@extends('layouts.master')

@section('content')
	<ul>
		<h2>{{{ $sale->title }}}</h2>
		<p>{{{ $sale->sale_name }}}</p>
		<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
		@if (Auth::check())
			{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}		
			<a class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id) }}}">Edit Sale Event</a>
			{{ Form::submit('Delete Sale Event', array('class' => 'btn btn-danger')) }}			
		
 			{{ Form::close() }}
		@endif
		<div>
			{{ Form::submit('Submit', array('class'=>'send-btn')) }}
			{{ Form::close() }}
		</div>
		<a class="btn btn-info" href ="{{{ action('SalesController@index') }}}">Back to Main Page</a>
	</ul>	

@stop {{-- This is to view one particular post by request. --}}
