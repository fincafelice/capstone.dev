@extends('layouts.master')

@section('top-script')
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/style.css" rel="stylesheet" type="text/css">
@stop



@section('content')
<div class="row">

	<div class="col-md-6">

		<div class="clearfix">
			<div class="pull-left">
				<h1>{{{ $sale->sale_name }}}</h1>
			</div>

			<div class="pull-right">
				<h4 >{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</h4>
			</div>
		</div>

		<h3>Location</h3> 
		<h4>1234 Meow St., San Antonio, TX 12345</h4>
		<h3>Time</h3>
		<h4>7:00 AM</h4>
		<!-- add seller username -->
		<hr>
		<p>{{{ $sale->description }}}</p>

	</div>



	<div class="col-md-4 col-md-offset-1">

		<!-- Carousel Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="/icon/up.png"></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="/icon/down.png"></a>

		<!-- Carousel Items -->
		<div class="carousel-inner">
            
	        <div class="item active">
	            <div class="row-fluid">
	              <table>
	              <tr>
	                <td><div class="span3"><a href="#x" style = " width:150px; " class="thumbnail"><img src="/img/framed-art-1.png" alt="Image" style="max-width:100%; width:150px;"></a></div></td>
	              </tr>
	              <tr>
	                <td><div class="span3"><a href="#x" style = " width:150px; " class="thumbnail"><img src="/img/framed-art-2.png" alt="Image" style="max-width:100%; width:150px;"></a></div></td>
	              </tr>
	              <tr>
	                <td><div class="span3"><a href="#x" style = " width:150px; " class="thumbnail"><img src="/img/framed-art-3.png" alt="Image" style="max-width:100%; width:150px;"></a></div></td>
	              </tr>
	              <tr>
	              </table>
	            </div><!--/row-fluid-->
	        </div><!--/item-->
	         
	        <div class="item">
	            <div class="row-fluid">
	               <table>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/5.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/6.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/7.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/8.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	              </table>
	            </div><!--/row-fluid-->
	        </div><!--/item-->
	         
	        <div class="item">
	            <div class="row-fluid">
	                <table>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/9.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/10.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/11.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                  <tr>
	                    <td><div class="span3"><a href="#x" style = " width:50px; " class="thumbnail"><img src="image/12.gif" alt="Image" style="max-width:100%; width:50px;"></a></div></td>
	                  </tr>
	                </table>
	            </div><!--/row-fluid-->
	        </div><!--/item-->
    
    	</div>
    	<!-- End Carousel -->
	</div>
</div>


<div class="row">
	<div class="col-md-6">

		@if (Auth::check())
			{{ Form::open(array('action'=>array('SalesController@destroy', $sale->id),'method'=>'delete')) }}		
			<a class="btn btn-success" href ="{{{ action('SalesController@edit', $sale->id) }}}">Edit Sale Event</a>
			{{ Form::submit('Delete Sale Event', array('class' => 'btn btn-danger')) }}			
		
 			{{ Form::close() }}
		@endif
		<a class="btn btn-info" href ="{{{ action('SalesController@index') }}}">Back to Main Page</a>	

	</div>
</div>
@stop {{-- This is to view one particular post by request. --}}

@section('bottom-script')

	<script src="/js/jquery.min.js"></script> 
	<script src="/js/bootstrap.js"></script> 
	<script src="/js/script.js"></script>

@stop
