@extends('layouts.master')

@section('css')
    <style>
    #map-canvas {
        height: 500px;
        margin: 0px;
        padding: 0px
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
        zoom: 6
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    sales.forEach(function(sale) {
        console.log(sale.longitude);
        console.log(sale.latitude);

        var latLongObj = new google.maps.LatLng(sale.latitude, sale.longitude);

        var marker = new google.maps.Marker({
            position: latLongObj,
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP
        });

        // google.maps.event.addListener(map, 'center_changed', function() {
        // // 3 seconds after the center of the map has changed, pan back to the
        // // marker.
        //     window.setTimeout(function() {
        //         map.panTo(marker.getPosition());
        //     }, 3000);
        // });

        google.maps.event.addListener(marker, 'click', function() {
            
            var infowindow = new google.maps.InfoWindow({
                content: sale.sale_name
            });

            infowindow.open(map, marker);
        });
    });
}

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
<div class="container">
    <div id="map-canvas"></div>
</div>
@stop
