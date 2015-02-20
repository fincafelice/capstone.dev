@extends('layouts.template')


@section('css')
    <style>
  
    #map-canvas {
        height: 450px;
        width: 100%;
        margin: 0px;
        padding: 0px
    }

     #map-container {
        margin-left: 30px;
    }

    #tag-sidebar {
        margin-top: 50px;
    }

    ul {
        list-style-type: none;
    }
    </style>

@stop


@section('topscript')

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
 

    <script>

    // Google Maps Geolocation & Autocomplete

    var placeSearch, autocomplete,  geocoder;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name',
        latitude: 'latitude',
        longitude: 'longitude'
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
              /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
              { types: ['geocode'] });
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            fillInAddress();
        });

        var mapOptions = {

            zoom: 10,
            disableDefaultUI: false,
            scrollwheel: true,
            draggable: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            maxZoom: 12,
            minZoom: 9,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT,
                style: google.maps.ZoomControlStyle.DEFAULT
            },
            panControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            }

        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

        // Try HTML5 geolocation
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
            var pos = new google.maps.LatLng(position.coords.latitude,
                                           position.coords.longitude);

          // var infowindow = new google.maps.InfoWindow({
                // map: map,
                // position: pos,
                // content: 'Location found using HTML5.'
            // });  removed 2/20/2015

            map.setCenter(pos);
            }, function() {
                handleNoGeolocation(true);
            });

        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }
    }
    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = new google.maps.LatLng(
                position.coords.latitude, position.coords.longitude);
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
            });
        }
    }
    // [END region_geolocation]

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }  // end loop
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
                
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        } // end loop

        document.getElementById('latitude').value = place.geometry.location.lat();
        document.getElementById('longitude').value = place.geometry.location.lng();
        // Define address variable by pulling completed address value from autocompleted object
        var address = $('#autocomplete').val();
            
        // Geocode that address
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'address': address }, function(result, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                    
                // Define lat/lng object to place corresponding marker.
                    var latLngObj = result[0]["geometry"]["location"];
                } // endif
                
                // Create new marker based on lat/lng
                var marker = new google.maps.Marker({
                    position: latLngObj,
                    map: map,
                    draggable: false,
                    animation: google.maps.Animation.DROP,
                });  // End Marker
                // zoom in on plotted marker
            }); // end function
        } // end fillIn
    // [END region_fillform]


    </script>
@stop


@section('content')

<div class="container">

    <div class="col-md-5"> <!-- begin left container -->
        <div class="page-header">
            <h1>Create New Sale Event</h1>
        </div>
        
        <!-- New Sale Form -->

        {{ Form::open(array('action' => 'SalesController@store', 'method' => 'sale')) }}

        <div class="form-group {{{ $errors->has('sale_name') ? 'has-error' : '' }}}">
            {{ Form::label('sale_name', 'Sale Name') }}
            {{ Form::text('sale_name', Input::old('sale_name'), array('class' => 'form-control')) }}
            {{ $errors->first('sale_name', '<p class="help-block">:message</p>') }}
        </div>

        <div class="form-group {{{ $errors->has('sale_date_time') ? 'has-error' : '' }}}">
            <label for="sale_date_time">Sale Date and Time</label>
            <input type="datetime-local" name="sale_date_time" class="form-control">
            {{ $errors->first('sale_date_time', '<p class="help-block">:message</p>') }}
        </div>

        <!-- Begin Hidden Input Forms -->

        {{ Form::hidden('street_num', null, array('id' => 'street_number')) }}
        {{ Form::hidden('street', null, array('id' => 'route')) }}
        {{ Form::hidden('city', null, array('id' => 'locality')) }}
        {{ Form::hidden('state', null, array('id' => 'administrative_area_level_1')) }}
        {{ Form::hidden('zip', null, array('id' => 'postal_code')) }}
        {{ Form::hidden('country', null, array('id' => 'country')) }}

        {{ Form::hidden('latitude', null, array('id' => 'latitude')) }}
        {{ Form::hidden('longitude', null, array('id' => 'longitude')) }}


        <!-- /Hidden -->

        <!-- Autocomplete -->

        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', null, array('id' => 'autocomplete', 'class' => 'form-control', 'onfocus' => 'geolocate()')) }}
        </div>

        <!-- /Autocomplete -->
        
        <div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">
            {{ Form::label('description', 'Sale Description') }}
            {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
            {{ $errors->first('description', '<p class="help-block">:message</p>') }}
        </div>

        <div class="form-group {{{ $errors->has('tags') ? 'has-error' : '' }}}">
            {{ Form::label('tags', 'Tags') }}
            {{ Form::textarea('tags', Input::old('tags'), array('class' => 'form-control')) }}
            {{ $errors->first('tags', '<p class="help-block">:message</p>') }}
        </div>
          
        <div>
            {{ Form::reset('Reset', array('class' => 'btn btn-default pull-left')) }}
            {{ Form::submit('Create Sale', array('class' => 'btn btn-default pull-right')) }}
        </div>


        {{ Form::close() }}

  </div> <!-- End Container Left -->


  <!-- begin right container -->
  <div id="map-container" class="col-md-6"> 
        <div class="page-header">
            <h1>Your Location</h1>
        </div>
        
        <div id="map-canvas"></div>

        <div id="tag-sidebar" class="text-center">
            <!-- <ul id="buttons"> -->
            @foreach($tags as $tag)

                <a href="" id="tags" class="btn btn-default tag-btn" data-id="{{{$tag->id}}}">{{{ $tag->name }}}</a> 
                
            @endforeach

        </div>

    </div> <!-- end right container -->
    </div> <!-- end main container -->
</div> <!-- footer fix div -->
@stop


@section('bottomscript')

<script type="text/javascript">
    $(document).ready(function () {
        initialize();

        // use jquery to select all buttons - prevent the default action on that button.

        // Find all buttons
        $tags = $('.tag-btn').click( function(event) {
            event.preventDefault();
          
            var insertText = $(this).text();
            $('#tags').append(insertText + ", ");
            console.log(this.text);

            $(".tag-btn").click(function () {
            });
        });
    });
</script>

@stop