@extends('layouts.master')

@section('topscript')
<style type="text/css">
    #map-canvas {
        height: 400px;
        width: 80%;
        margin: 0px;
        padding: 0px
      }
</style>
<script src="http://maps.googleapis.com/maps/api/js?v=3.14&libraries=places"></script>
<script type="text/javascript">
    // Define pertinent variables
    var map;
    var placeSearch, autocomplete;
    // Define object componentForm to parse values from autocompleted address
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };
    // to be called on DOM load, initializes map on predefined map-canvas div
    function initialize() {
        // Set map options
        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(29.428459, -98.492433)  // Alter to use geolocated IP address.
        };
        
        // Redefine/create the maps object, using the map-canvas div element and above options.
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      // Create the autocomplete object, restricting the search to geographical location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
          { types: ['geocode'] });
      
      // When the user selects an address from the dropdown, populate the address fields in the form.
      google.maps.event.addListener(autocomplete, 'place_changed', function() {
        fillInAddress();
      });
    }
    // [START region_geolocation]
    // Bias the autocomplete object to the user's geographical location, as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          autocomplete.setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
        });
      }
    }
    // [END region_geolocation]
    // [START region_fillform]
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
    } // end fillInAddress
    // [END region_fillform]
    // google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop

@section('content')

<div class="container">

<div class="col-md-5"> <!-- begin left container -->
    <div class="page-header">
        <h1>Create New Sale</h1>
    </div>
    
	<!-- New Sales Form -->
	<div>

	{{ Form::open(array('action'=>'SalesController@store')) }}

		<div class="form-group {{{ $errors->has('sale_name') ? 'has-error' : '' }}}">
			{{ Form::label('sale_name', 'Sale Name') }}
			{{ Form::text('sale_name', Input::old('sale_name'), array('class' => 'form-control')) }}
			{{ $errors->first('sale_name', '<p class="help-block">:message</p>') }}
		</div>

		<!-- Begin Hidden Input Forms -->

	    {{ Form::hidden('street_num', null, array('id' => 'street_number')) }}
	    {{ Form::hidden('street', null, array('id' => 'route')) }}
	    {{ Form::hidden('city', null, array('id' => 'locality')) }}
	    {{ Form::hidden('state', null, array('id' => 'administrative_area_level_1')) }}
	    {{ Form::hidden('zip', null, array('id' => 'postal_code')) }}
	    {{ Form::hidden('country', null, array('id' => 'country')) }}

	    <div class="form-group">
		    {{ Form::label('address', 'Address') }}
		    {{ Form::text('address', null, array('id' => 'autocomplete', 'class' => 'form-control', 'onfocus' => 'geolocate()')) }}
		</div>

		<div class="form-group {{{ $errors->has('sale_date_time') ? 'has-error' : '' }}}">
			<label for="sale_date_time">Sale Date and Time</label>
			<input type="datetime-local" name="sale_date_time" class="form-control">
			{{ $errors->first('sale_date_time', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">
			{{ Form::label('Sale Description', 'Sale Description') }}
			{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
			{{ $errors->first('description', '<p class="help-block">:message</p>') }}
		</div>

		{{ Form::submit('Create Sale', array('class' => 'btn btn_primary')) }}
		{{ Form::close() }}
	</div>

    </div> <!-- end left container -->

    <div class="col-md-7"> <!-- begin right container -->
        <div class="page-header">
            <h1 class="text-right">Your Location</h1>
        </div>

        <div id="map-canvas"/>

    </div> <!-- end right container -->
    </div> <!-- end main container -->
</div> <!-- footer fix div -->

@stop

@section('bottomscript')
<script type="text/javascript">
    $(document).ready(function () {
        initialize();
    });
</script>

@stop

