<!-- New Sales Form -->

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

<div class="form-group {{{ $errors->has('description') ? 'has-error' : '' }}}">
	{{ Form::label('Sale Description', 'Sale Description') }}
	{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
	{{ $errors->first('description', '<p class="help-block">:message</p>') }}
</div>

<div class="form-group {{{ $errors->has('seller_id') ? 'has-error' : '' }}}">
	{{ Form::label('seller_id', 'Seller ID') }}
	{{ Form::text('seller_id', Input::old('seller_id'), array('class' => 'form-control')) }}
	{{ $errors->first('seller_id', '<p class="help-block">:message</p>') }}
</div>