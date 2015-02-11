@extends('layouts.master')

@section('css')
  <style>
  	
  	.carousel-inner > .item > img,
    	.carousel-inner > .item > a > img {
        width: 50%;
        margin: auto;
    }
   </style>
@stop


@section('content')
  <h1 align = center>My Garage Sale.</h1>

  <div class="container">

    <div class="row">
      <div class="col-sm-4">
      	<h3>Learn more about finding garage sales here!</h3>
      	<p>Description Paragraph and then a link</p>
      </div>
      <div class="col-sm-4">
      	<h3>Learn more about being a seller here!</h3>
      	<p>Description paragraph and then a alink</p>
      </div>
      <div class="col-sm-4">
      	<h3>Learn more about Garage Sales Here!</h3>
      		<p align = center>
      		fsafsfa<br>
      		fsafsafsa<br>
      		fa<br>
      		fafsf<br>
      		sfsaff<br>
      		safafafs<br>
      		fsaf<br>
      		af<br>
      		sffafsfafsfsafsafa<br>
      		</P>
      </div>
    </div>
  </div>

  <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="img_chania.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="img_chania2.jpg" alt="Chania" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chania</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>
      
        <div class="item">
          <img src="img_flower.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="img_flower2.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
@stop

</html>
