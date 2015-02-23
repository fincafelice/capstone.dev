@extends('layouts.template')


@section('css')
	<style>
		.sale-wrapper {
			border: #e4e4e4;
			padding: 20px;
			border-radius: 4px;
			box-shadow: 0 0 8px #A3A3C2;
			margin-bottom: 35px;
			min-height: 250px;
			margin-left: -30px;
		}

		#sale-thumbnail {
			max-width: 100px;
			max-height: 100px;
			min-height: 100px;
			min-width: 100px;
			float: right;
			margin-right: -200px;
			margin-top: -5px;
			margin-bottom: -10px;

		}

		#sale-row {
			margin-right: 0;
			margin-left: 0;
			margin-bottom: 0;
			margin-top: 0;
		}

		.pagination {
			margin-left: 100px;
		}

	    #map-canvas {
	        height: 450px;
	        width: 80%;
	        margin: 0px;
	        padding: 0px
	    }
   
        #tag-sidebar {
      		margin-right: 130px;
      		margin-top: 35px;
      		font-size: 125%;
      		border: #e4e4e4;
      		border-style: solid;
    		border-width: 2px;
			padding: 0px 20px 20px 20px;
			border-radius: 4px;
      	}

		.view-sale-btn {
			margin-top: -10px;
		}

		#tag-header {
			width: 100%;
			padding: 0px 0px 0px 0px;
			border-radius: 4px;
			margin-top: -50px;
			margin-right: auto;
			margin-left: auto;

		}

		#tag-header, h3 {
			margin-top: 15px;
			margin-bottom: 15px;
		}
	</style>
@stop


@section('topscript')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script>
		// Note: This example requires that you consent to location sharing when
		// prompted by your browser. If you see a blank space instead of the map, this
		// is probably because you have denied permission for location sharing.

		var sales = {{ $sales->toJson() }};

		var map;

		function initialize() {
		    var mapOptions = {
		        zoom: 10
		    };

		    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		    sales.data.forEach(function(sale) {
		        console.log(sale.longitude);
		        console.log(sale.latitude);

		        var latLongObj = new google.maps.LatLng(sale.latitude, sale.longitude);

		        var marker = new google.maps.Marker({
		            position: latLongObj,
		            map: map,
		            draggable: false,
		            animation: google.maps.Animation.DROP
		        });


		        google.maps.event.addListener(marker, 'click', function() {
		            
		            var infowindow = new google.maps.InfoWindow({
		                content: sale.sale_name
		            });

		            infowindow.open(map, marker);
		        });
		    });

			// Try HTML5 geolocation
			if(navigator.geolocation) {
			    navigator.geolocation.getCurrentPosition(function(position) {
			        var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			        
			        map.setCenter(pos);
			    }, function() {
			        handleNoGeolocation(true);
			    });
			} else {
			    // Browser doesn't support Geolocation
			    handleNoGeolocation(false);
			}
		}


		function handleNoGeolocation(errorFlag) {
		  if (errorFlag) {
		    var content = 'Error: The Geolocation service failed.';
		  } else {
		    var content = 'Error: Your browser doesn\'t support geolocation.';
		  }

		  var options = {
		    map: map,
		    position: new google.maps.LatLng(60, 105),
		    content: content
		  };

		  var infowindow = new google.maps.InfoWindow(options);
		  map.setCenter(options.position);
		}

		google.maps.event.addDomListener(window, 'load', initialize);

    </script>
@stop


@section('content')
	<div class="row">
		<div class="container">
			<h1>Find Garage Sales</h1>
			<hr>
		</div>
		<div class="row">
			<div class="col-md-5 col-md-offset-1">
				<!-- Sale Wrapper -->
				<ul>
					@foreach ($sales as $sale) 
						<div class="sale-wrapper">

							<div id="sale-row" class="row">
								<div class="col-md-6">
									<h2>{{{ $sale->sale_name }}}</h2>
								</div>
								<div class="col-md-1">
								@if (!$sale->images->isEmpty())
									<img class="img-circle" id="sale-thumbnail" src="{{ $sale->images->first()->img_path }}">
								@endif
								</div>
							</div>
							<hr>
							<p>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</p>
							<p>{{ nl2br($sale->summarizeDescription(true)) }}</p>
							<div class="pull-left">
								<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
							</div>
							<div class="clearfix">
								<div class="pull-right">
									<a id="view-sale-btn" class="btn btn-success" href ="{{{ action('SalesController@show', $sale->id) }}}">More</a>
								</div>
							</div>

							@foreach ($sale->tags as $tag)
								<small> {{{ $tag->name }}} </small>
							@endforeach
						</div>
					@endforeach	
				</ul>
			</div> 
			<!-- //Sale Wrapper// -->
			<div class="col-md-6">
				<div class="hidden-xs hidden-sm" id="map-canvas"></div>






		
				<div id="tag-sidebar" class="sidebar">

	                <!-- Sidebar Block -->
	                <div class="sidebar-block">
	                    <div class="sidebar-content tags blog-search">
	                        <form action="#" method="post">
	                            <div class="input-group">
	                                <input type="text" name="search" class="form-control blog-search-input text-input" placeholder="Search.."/>
	                                <span class="input-group-addon">
	                                    <button class="blog-search-button icon-search">
	                                    </button>
	                                </span>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <!-- Sidebar Block -->


	                <!-- Sidebar Block -->
	                <div class="sidebar-block">
	                    <h3 class="h3-sidebar-title sidebar-title">
	                        Search by Tag
	                    </h3>

	                    <div class="sidebar-content tags">
	                     

							@foreach ($showTags as $showTag)
								<a href="{{{ action('TagsController@index', array('showTag' => $showTag->name)) }}}"> {{ $showTag->name }} </a>
							@endforeach	

	                     
	                    </div>
	                </div>
	                <!-- Sidebar Block -->








				{{-- <div id="tag-sidebar" class="text-center">
					<div id="tag-header" class="row section-content section-color-bg white-text">
						<h3>search by tag</h3> --}}
					</div>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<span id="pagination">{{ $sales->appends(array('search' => Input::get('search')))->links() }}</span>
			</div>
		</div>
	</div>
@stop
