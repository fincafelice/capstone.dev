@extends('layouts.master')

@section('content')
	<ul>
		@foreach ($sales as $sale) 
			<h3><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->sale_name }}}</a></h3>
			<p>{{{ $sale->sale_date_time}}}</p>
			<p>{{{ $sale->description }}}</p>
			<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
		@endforeach
	</ul>

	{{ $sales->appends(array('search' => Input::get('search')))->links() }}
@stop
