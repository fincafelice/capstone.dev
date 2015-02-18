@extends('layouts.master')

@section('top-script')
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
@stop


@section('css')
	<style>
		#save-img {
			margin-top: -15px;
		}
	</style>
@stop


@section('content')
<div class="row">

	<div class="col-md-6">

		<div class="clearfix">
			<div class="pull-left">
				<h1>{{{ $sale->sale_name }}}</h1>
			</div>

			<div class="pull-right">
				<h4 >{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</h4>
			</div>
		</div>

		<h3>Location</h3> 
		<h4>{{{ $sale->street_num }}} {{{ $sale->street }}} {{{ $sale->city }}}, {{{ $sale->state }}} {{{ $sale->zip }}}</h4>
		<h3>Date and Time</h3>
		<h4>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</h4>


		<!-- add seller username -->
		<hr>
		<p>{{ $sale->description }}</p>

	</div>


	<div class="col-md-4 col-md-offset-1">
		@foreach($sale->images as $image)
			<img class="img-responsive" src="{{ $image->img_path }}">
			@if (Auth::id() == $sale->user_id)
		    	<button class="img-delete-btn" data-image-id="{{ $image->id }}">Delete Image</button>
			@endif
		@endforeach
	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="clearfix">

			@if (Auth::id() == $sale->user_id)
				{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

				<div class="pull-left">		
					<a class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id)}}}">Edit Sale Event</a>
				</div>

				<div class="pull-right">
				{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}
				{{ Form::submit('Delete Sale Event', array('class' => 'btn btn-danger')) }}
				</div>		
			
	 			{{ Form::close() }}
			@endif
			
			<div class="text-center">
				<a class="btn btn-info" href ="{{{ action('SalesController@index') }}}">Back to Browse</a>	
			</div>
		</div>
	</div>
</div>

{{ Form::open(['method' => 'DELETE', 'id' => 'delete-form'])}}
{{ Form::close() }}

@stop {{-- This is to view one particular post by request. --}}

@section('bottom-script')

	<script src="/js/jquery.min.js"></script> 
	<script src="/js/bootstrap.js"></script> 
	<script src="/js/script.js"></script>
	<script>
		$('.img-delete-btn').click(function () {
			var imageId = $(this).data('image-id');
			$('#delete-form').attr('action', '/images/' + imageId);

			if (confirm('Are you sure you want to delete this image?')) {
				$('#delete-form').submit();
			}
		});
	</script>

@stop
