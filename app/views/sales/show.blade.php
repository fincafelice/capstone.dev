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
			<img class="img-responsive" src="{{  $image->img_path }}">
		@endforeach

	</div>
</div>


<div class="row">
	<div class="col-md-6">
		<div class="clearfix">

			@if (Auth::id() == $sale->user_id)
				{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

				<div class="pull-left">		
					<a class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id)}}}">Upload Images</a>
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


<!-- 	<div class="col-md-4 col-md-offset-1">
		<div class="clearfix">

			@if (Auth::check())
				<div class="pull-left">
					{{ Form::model($sale, array('action' =>array('SalesController@update', $sale->id), 'method'=> 'put', 'files' => true)) }}		
					{{ Form::file('images[]', array('multiple'=>true)) }}
				</div>

				<div id="save-img" class="pull-right">
					{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
				</div>
			@endif

		</div>
<<<<<<< HEAD
	</div>
 -->
</div>

@stop {{-- This is to view one particular post by request. --}}

@section('bottom-script')

	<script src="/js/jquery.min.js"></script> 
	<script src="/js/bootstrap.js"></script> 
	<script src="/js/script.js"></script>

@stop
