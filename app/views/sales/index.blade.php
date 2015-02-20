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

    #map-canvas {
        height: 450px;
        width: 85%;
        margin: 0px;
        padding: 0px
      }

    .col-md-12 {
		margin-left: 50px;
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
	<div class="col-md-6">
		<!-- Sale Wrapper -->
			<ul>
				@foreach ($sales as $sale) 
					<div class="sale-wrapper">

						<div id="sale-row" class="row">
						<div class="col-md-6">
						<h2><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->sale_name }}}</a></h2>
						</div>


						<div class="col-md-1">
						@if (!$sale->images->isEmpty())
							<img class="img-circle" id="sale-thumbnail" src="{{ $sale->images->first()->img_path }}">
						@endif
						</div>
						</div>


						<hr>


						<p>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</p>
						<p>{{{ $sale->description }}}</p>
						<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
						@foreach ($sale->tags as $tag)

							<small> {{{ $tag->name }}} </small>

						@endforeach
					</div>
				@endforeach	
			</ul>
		</div> 
		<!-- //Sale Wrapper// -->
	<div class="col-md-6">
<!-- 		<h1>Render Mah Map!</h1> -->
		<div id="map-canvas"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{{ $sales->appends(array('search' => Input::get('search')))->links() }}
		</div>
	</div>
@stop
