<!-- New User Form -->

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

