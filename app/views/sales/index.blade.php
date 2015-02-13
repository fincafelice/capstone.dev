@extends('layouts.master')

@section('content')
	<ul>
		@foreach ($sales as $sale) 
			<h3><a href ="{{{ action('SalesController@index', $sale->id) }}}">{{{ $sale->sale_name }}}</a></h3>
			<p>{{{ $sale->description }}}</p>
			<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
		@endforeach
	</ul>

@stop