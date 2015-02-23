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

		.photo-column {
			margin-left: -15px;
		}

		.sale-wrapper {
			border: #e4e4e4;
			padding: 20px;
			border-radius: 4px;
  			box-shadow: 0 0 8px #A3A3C2;
		}

		.setImageD {
			max-width: 270px;
			max-height: 200px;
		}

		#edit-sale-btn {
			padding: 0 49.5px !important;
			margin-top: 15px;
		}

		#delete-sale-btn {
			padding: 0 36px !important;
			margin-top: 15px;
		}

		#browse-btn {
			margin-top: 15px;
		}
	</style>
@stop


@section('content')
<div class="container">
	<div class="row">
		<h1>Sale Details</h1>
		<hr>
	</div>
		<div class="col-md-9">
			<div class="sale-wrapper">

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
				<h4>{{{ $sale->sale_date_time->format('l, F jS Y @ g:i A') }}}</h4>

				<!-- add seller username -->
				<hr>
				<p>{{ nl2br($sale->description) }}</p>

			</div>
		</div>

		<div class="col-md-3">
			<div class="clearfix">
				<!-- <div class="pull-right"> -->
				<div class="text-center">
					<a id="browse-btn" class="btn btn-info" href ="{{{ action('SalesController@index') }}}">Back to Browse</a>	
				</div>

				@if (Auth::id() == $sale->user_id)

					{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

					<!-- <div class="pull-left">	 -->	
					<div class="text-center">
						<a id="edit-sale-btn" class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id) }}}">Edit Sale</a>
					</div>

				
					{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}

					<div class="text-center">
						{{ Form::submit('Delete Sale', array('class' => 'btn btn-danger', 'id' => 'delete-sale-btn')) }}
					</div>		

				
		 			{{ Form::close() }}
				@endif
				
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">
			<div class="content-wrapper">
				<div class="body-wrapper">
				    <div class="container">
				        <div class="row">
				            <div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
				                data-animrepeat="0"
				                data-speed="1s"
				                data-delay="0.5s">
				       

				                <div class="space-sep20"></div>
				            </div>
				        </div>

				        <div class="row">
				            <div class="col-md-12 col-sm-12">
				                <div class="portfolio-items">
									@for($i = 0; $i < $sale->images->count(); $i++)
								
									<div class="thumb-label-item">
					                    <!-- Portfolio Item -->
					                    <div class="img-overlay thumb-label-item-img">
			         						<img src="{{ $sale->images[$i]->img_path }}">

											<div class="item-img-overlay">
                                                <a class="portfolio-zoom fa fa-plus" href="{{ $sale->images[$i]->img_path }}"
			                                       data-rel="prettyPhoto[portfolio]"></a>

												@if (Auth::id() == $sale->user_id)
	                                                <div class="item_img_overlay_content">
	                                                    <h3 class="thumb-label-item-title">
													    	<button class="btn btn-danger img-delete-btn" data-image-id="{{ $sale->images[$i]->id }}">Remove</button>
	                                                    </h3>
	                                                </div>
												@endif
											</div>
                               			</div>
					                    <!-- //Portfolio Item// -->
									</div>
									@endfor

								</div>
			                </div>

							{{ Form::open(['method' => 'DELETE', 'id' => 'delete-form']) }}
							{{ Form::close() }}
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="row text-center">
		<div class="col-md-10 col-md-offset-1">
		<div id="disqus_thread"></div>
		    <script type="text/javascript">
		        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		        var disqus_shortname = 'teamgaragesale'; // required: replace example with your forum shortname

		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
		    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	</div>
</div>
</div>
</div>

@stop {{-- This is to view one particular post by request. --}}


@section('bottomscript')

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
