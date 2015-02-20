@extends('layouts.template')

@section('topscript')
<!-- 	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css"> -->
@stop


@section('css')
	<style>
		#save-img {
			margin-top: -15px;
		}
	</style>
@stop


@section('content')
<div class="container">
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

<!-- 		<div class="col-md-4 col-md-offset-1">
			@foreach($sale->images as $image)
	         	<img class="img-responsive" src="{{ $image->img_path }}">
	          		
				@if (Auth::id() == $sale->user_id)
			    	<button class="img-delete-btn" data-image-id="{{ $image->id }}">Delete Image</button>
				@endif
			@endforeach
		</div> -->
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="clearfix">


				<div class="pull-right">
					<a class="btn btn-info" href ="{{{ action('SalesController@index') }}}">Back to Browse</a>	
				</div>

				@if (Auth::id() == $sale->user_id)

					{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

					<div class="pull-left">		
						<a class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id) }}}">Edit Sale</a>
					</div>

				
					{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

					<div class="text-center">
						{{ Form::submit('Delete Sale Event', array('class' => 'btn btn-danger')) }}
					</div>		

				
		 			{{ Form::close() }}
				@endif
				
			</div>
	    </div>
	</div>

	{{ Form::open(['method' => 'DELETE', 'id' => 'delete-form']) }}
	{{ Form::close() }}
</div>

@stop {{-- This is to view one particular post by request. --}}








@section('content2')
<div class="content-wrapper hide-until-loading">
	<div class="body-wrapper">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
	                data-animrepeat="0"
	                data-speed="1s"
	                data-delay="0.5s">
	                <h2 class="h2-section-title">Our Work</h2>

	                <div class="i-section-title">
	                    <i class="icon-files">
	                    </i>
	                </div>

	                <div class="space-sep20"></div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-md-12 col-sm-12">
	                <div class="portfolio-items">

					@foreach($sale->images as $image)

	                    <!-- Portfolio Item -->
	                    <div class="thumb-label-item animated branding"
	                         data-animtype="fadeInUp"
	                         data-animrepeat="0"
	                         data-speed="1s"
	                         data-delay="1.2s">
	                        <div class="img-overlay thumb-label-item-img">


	                            <!-- <img
	                                src="images/placeholders/portfolio4.jpg"
	                                alt=""/> -->

	         					<img class="img-responsive" src="{{ $image->img_path }}">
	          		


	                            <div class="item-img-overlay">
	                                <a class="portfolio-zoom fa fa-plus"
	                                   href="{{ $image->img_path }}"
	                                   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>

	                                <div class="item_img_overlay_content">
	                                    <h3 class="thumb-label-item-title">
	                                        <a href=""> Vestibum friilla </a>
	                                    </h3>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- //Portfolio Item// -->
						@if (Auth::id() == $sale->user_id)
					    	<button class="img-delete-btn" data-image-id="{{ $image->id }}">Delete Image</button>
						@endif
					@endforeach
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@stop


@section('bottomscript')

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


		$('.sale-delete-btn').click(function () {
			var saleId = $(this).data('sale-id');
				$('#delete-form').attr('action', '/sales/' + saleId);

				if (confirm('Are you sure you want to delete this sale?')) {
					$('#delete-form').submit();
				}
			});
	</script>
@stop
