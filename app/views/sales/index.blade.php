@extends('layouts.master')

@section('content')
	<ul>
		@foreach ($sales as $sale) 
			<h3><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->description }}}</a></h3>
			<p>{{{ $sale->zip }}}</p>
			<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
			<img src = "{{{ $post->image_url }}}">
		@endforeach
	</ul>

<!-- pager -->
{{ $sales->appends(array('search'=>Input::get('search')))->links() }}

@stop