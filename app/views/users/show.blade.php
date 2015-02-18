@extends('layouts.master')

@section('title')
	My Garage Sale - User Dashboard
@stop

@section('content')
	<div class="row">
		<div class="col-md-4">
			<h2>{{{ $user->username }}}</h2>

			<h3>{{{ $user->email }}}</h3>

			<!-- Get titles of all posts user has authored! --> 

			<h5>Member since {{{ $user->created_at->format('F jS Y') }}}</h5>

			<h5>Last update {{{ $user->updated_at->format('F jS Y @ h:i:s A') }}}</h5>
		</div> 
	</div>
<!-- 	<hr> -->
	<div class="row">
 		<div class="col-md-4">
			<div class="clearfix">
				{{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'delete')) }}
					{{ Form::submit('Delete User', array('class' => 'btn btn-danger pull-right')) }}

				<a class="btn btn-primary pull-left" href="{{{ action('UsersController@edit', $user->id) }}}">Update User</a>
				{{ Form::close() }}
			</div>
		</div>
	</div>


	<div class="row">
 		<div class="col-md-10">
 			<h3>My Sales</h3>
 			<table class="table">
<!--  				<thead>
 				<tr>
 					<th>Name</th>
 					<th>Date & Time</th>
 					<th>Location</th>
 				</tr>
 				</thead>  -->

				@foreach ($sales as $sale) 
					<tr>
						<td><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->sale_name }}}</a></td>
						<td>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</td>
						<td>{{{ $sale->street_num }}} {{{ $sale->street }}} {{{ $sale->city }}}, {{{ $sale->state }}} {{{ $sale->zip }}}</td>
						<td><a class="btn btn-primary" href ="{{{ action('SalesController@edit', $sale->id) }}}">Update</a></td>
						<td><a class="btn btn-danger" href ="{{{ action('SalesController@destroy', $sale->id) }}}">Remove</a>
					</tr>
				@endforeach

			</table>
		</div>
	</div>


	<div class="row">
		<div class="col-md-10">

			<div class="user">
			@if (Auth::guest())
				<h5>Currently viewing as guest</h5>
			@endif

			@if (Auth::check())
				<h5>Currently logged in as {{{ Auth::user()->email }}}</h5>
				<!-- id {{{ Auth::id() }}} -->
			@endif

			</div>
	
		</div>
	</div>
@stop