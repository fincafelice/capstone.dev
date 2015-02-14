@extends('layouts.master')



@section('css')
    <style>
	    html, body, #map-canvas {
        height: 500px;
        width: 100%;
        margin: 0px;
        padding: 0px
      }
	
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
    </style>
@stop



@section('top-script')

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
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
}

// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
// [END region_fillform]

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

    </script>
@stop


@stop



@section('content')

<div class="container">

	<div class="col-md-5"> <!-- begin left container -->
    	<div class="page-header">
       		<h1>Create New User Account</h1>
    	</div>



		<!-- New User Form -->

		{{ Form::open(array('action' => 'SalesController@store', 'method' => 'sale')) }}

		<div class="form-group {{{ $errors->has('username') ? 'has-error' : '' }}}">
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
			{{ $errors->first('username', '<p class="help-block">:message</p>') }}
		</div>	

		<div class="form-group {{{ $errors->has('email') ? 'has-error' : '' }}}">
			{{ Form::label('email', 'eMail Address') }}
			{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
			{{ $errors->first('email', '<p class="help-block">:message</p>') }}
		</div>


		<div class="form-group {{{ $errors->has('password') ? 'has-error' : '' }}}">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', array('class' => 'form-control')) }}
			{{ $errors->first('password', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('password_confirmation') ? 'has-error' : '' }}}">
			{{ Form::label('password_confirmation', 'Confirm Password') }}
			{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
			{{ $errors->first('password_confirmation', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('street') ? 'has-error' : '' }}}">
			{{ Form::label('street', 'Street') }}
			{{ Form::text('street', Input::old('street'), array('class' => 'form-control')) }}
			{{ $errors->first('street', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('apt') ? 'has-error' : '' }}}">
			{{ Form::label('apt', 'Apartment Number') }}
			{{ Form::text('apt', Input::old('apt'), array('class' => 'form-control')) }}
			{{ $errors->first('apt', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('city') ? 'has-error' : '' }}}">
			{{ Form::label('city', 'City') }}
			{{ Form::text('city', Input::old('city'), array('class' => 'form-control')) }}
			{{ $errors->first('city', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('state') ? 'has-error' : '' }}}">
			{{ Form::label('state', 'State') }}
			{{ Form::text('state', Input::old('state'), array('class' => 'form-control')) }}
			{{ $errors->first('state', '<p class="help-block">:message</p>') }}
		</div>

		<div class="form-group {{{ $errors->has('zip') ? 'has-error' : '' }}}">
			{{ Form::label('zip', 'Zip Code') }}
			{{ Form::text('zip', Input::old('zip'), array('class' => 'form-control')) }}
			{{ $errors->first('zip', '<p class="help-block">:message</p>') }}
		</div>

		{{ Form::submit('Create User', array('class' => 'btn btn_primary')) }}


		<!-- Begin Hidden Input Forms -->

		{{ Form::hidden('role', 'user', array('id' => 'role')) }}
	    {{ Form::hidden('street_num', null, array('id' => 'street_number')) }}
	    {{ Form::hidden('street', null, array('id' => 'route')) }}
	    {{ Form::hidden('city', null, array('id' => 'locality')) }}
	    {{ Form::hidden('state', null, array('id' => 'administrative_area_level_1')) }}
	    {{ Form::hidden('zip', null, array('id' => 'postal_code')) }}
	    {{ Form::hidden('country', null, array('id' => 'country')) }}
	    {{ Form::hidden('latitude', null, array('id' => 'latitude')) }}
	    {{ Form::hidden('longitude', null, array('id' => 'longitude')) }}

	    {{ Form::label('address', 'Address') }}
	    {{ Form::text('address', null, array('id' => 'autocomplete', 'class' => 'form-group form-control bordered', 'onfocus' => 'geolocate()')) }}


		{{ Form::close()  }}

	</div> <!-- End Container Left -->


	<!-- begin right container -->
	<div class="col-md-7"> 
        <div class="page-header">
            <h1 class="text-right">Your Location</h1>
        </div>

        <div id="map-canvas"/>

    </div> <!-- end right container -->
    </div> <!-- end main container -->
</div> <!-- footer fix div -->



<!-- Google Maps Autocomplete Field and Hidden Auto-populated Form Fields

	<h1 class="page-header">Autocomplete Example</h2>

	<div class="col-md-12">
    <div id="locationField">
      <input id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="text"></input>
    </div>

    <table id="address">
      <tr>
        <td class="label">Street address</td>
        <td class="slimField"><input class="field" id="street_number"
              disabled="true"></input></td>
        <td class="wideField" colspan="2"><input class="field" id="route"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">City</td>
        <td class="wideField" colspan="3"><input class="field" id="locality"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">State</td>
        <td class="slimField"><input class="field"
              id="administrative_area_level_1" disabled="true"></input></td>
        <td class="label">Zip code</td>
        <td class="wideField"><input class="field" id="postal_code"
              disabled="true"></input></td>
      </tr>
      <tr>
        <td class="label">Country</td>
        <td class="wideField" colspan="3"><input class="field"
              id="country" disabled="true"></input></td>
      </tr>
    </table>

-->

@stop




@section('bottom-script')

<script type="text/javascript">
    $(document).ready(function () {
        initialize();
    });
</script>

@stop