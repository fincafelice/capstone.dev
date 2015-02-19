@extends('layouts.template')

@section('content')

<div class="container">
	<div class="col-md-7">
		<ul>
			@foreach ($sales as $sale) 
				<h3><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->sale_name }}}</a></h3>
				<p>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</p>
				<p>{{{ $sale->description }}}</p>
				<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
				@foreach ($sale->tags as $tag)

					<small> {{{ $tag->name }}} </small>

				@endforeach
				<hr>
			@endforeach	
		</ul>

		{{ $sales->appends(array('search' => Input::get('search')))->links() }}
	</div>
</div>

@stop
