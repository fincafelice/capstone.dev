@extends('layouts.template')

@section('title')
	My Garage Sale - User Dashboard
@stop

@section('css')
	<style>
	#sales-detail {
		border: #e4e4e4 solid 2px;
		padding: 20px;
		border-radius: 4px;
		margin-top: 20px;
	}

	.clearfix {
		padding-top: 35px;
		margin-left: -15px;
	}
	</style>
@stop
	

@section('content')
<div class="container">
	<h1>Manage Account</h1>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<h2>{{{ $user->username }}}</h2>

			<h3>{{{ $user->email }}}</h3>

			<h5>Member since {{{ $user->created_at->format('F jS Y') }}}</h5>
		</div> 
	</div>

	<div class="row">
 		<div class="col-md-12">
			@foreach ($sales as $sale) 

			<div id="sales-detail" class="col-md-8">
				<div class="feature-content">
                    <h3 class="h3-body-title blog-title">
                    	{{{ $sale->sale_name }}}
                    </h3>
                    <hr>
                    <p>
                        {{{ $sale->address }}}
                    </p>

	            </div>

	            <div class="feature-details">

            		<div class="pull-right"><td>
            			<a class="btn btn-danger" href ="{{{ action('SalesController@show', $sale->id) }}}">Manage</a>
            		</div> 

	            	<div class="pull-left">
		                <i class="icon-calendar"></i>
		                <span>{{{ date("F, d Y", strtotime($sale->sale_date_time)) }}} | </span>
		                <span class="details-seperator"></span>

		                <i class="icon-clock-streamline-time"></i>
		                <span> {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</span>
					</div>
	            </div>
	        </div>
			@endforeach

				<div class="col-md-8">
					<div class="clearfix">
						{{ Form::open(array('action' => array('UsersController@destroy', $user->id), 'method' => 'delete')) }}
							{{ Form::submit('Delete Account', array('class' => 'btn btn-danger pull-right')) }}

						<a class="btn btn-primary pull-left" href="{{{ action('UsersController@edit', $user->id) }}}">Update Account</a>
						{{ Form::close() }}
					</div>
				</div>
		</div>
	</div>
</div>
@stop