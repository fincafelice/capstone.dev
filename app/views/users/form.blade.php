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

</div>

