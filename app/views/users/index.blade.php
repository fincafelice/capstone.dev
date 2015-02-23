@extends('layouts.master')

@section('topscript')
<link href='http://fonts.googleapis.com/css?family=Give+You+Glory|Bad+Script|Calligraffitti|Shadows+Into+Light+Two|Homemade+Apple|Norican' rel='stylesheet' type='text/css'>
@stop

@section('css')
<style>
    #logo {

/*    font-family: 'The Girl Next Door', cursive;*/
/*    font-family: 'Give You Glory', cursive;*/
    font-family: 'Calligraffitti', cursive;
/*   	font-family: 'Bad Script', cursive;*/
/*   	font-family: 'Shadows Into Light Two', cursive;*/
/*   	font-family: 'Homemade Apple', cursive;*/
    text-align: centered;
}

	h2 {
		margin-bottom: -10px;
	}
</style>
@stop


@section('content')
<div class="container">
	<div id="logo" class="col-md-4 text-center">
		<h2>My</h2>
		<h2>Garage</h2> 
		<h2>Sale</h2>
		<br>
		<br>
		<br>
		<h2>My Garage</h2> 
		<h2>Sale</h2>
		<br>
		<br>
		<br>
		<h2>My</h2> 
		<h2>Garage Sale</h2>
		<br>
		<br>
		<br>
		<h2>My Garage Sale</h2> 
	</div>
</div>

@stop