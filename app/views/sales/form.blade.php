<!-- New Sales Form -->
<div class="form-group {{{ $errors->has('sale_name') ? 'has-error' : '' }}}">
	{{ Form::label('sale_name', 'Sale Name') }}
	{{ Form::text('sale_name', Input::old('sale_name'), array('class' => 'form-control')) }}
	{{ $errors->first('sale_name', '<p class="help-block">:message</p>') }}
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

<div>
	{{ Form::label('image', 'Post Image') }}<br>
	{{ Form::file('image', array('class' => 'form-control')) }}
	{{ $errors->first('image', '<p class-"help-block">:message</p>') }}
</div>
