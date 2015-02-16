@extends('layouts.master')

@section('css')

<style>

.carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
    }
    img {
/*      height: 75px;
      width: 75px;
      position: relative; top: -15px;*/
    }
    .caroImg {
      image-rendering: auto;
      max-height: 50%;
    }
</style>


@section('content')

<body>

<h1 align = center>My Garage Sale.</h1>

<div class="container">

  <div class="row">
    <div class="col-sm-4">
      <h4>Welcome to my Garage Sale!</h4>
      <p align = center>Generic Mission Statement</p>
    </div>
    <div class="col-sm-4">
      <h4>This application is here to help you plan your garage sale!</h4>
      <p align = center></p>
    </div>
    <div class="col-sm-4">
      <h4>It is also here to help you find garage sales in your location that you can go to! </h4>
        <p align = center></p>
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


      <div class="item active caroImg">
        <img src="/img/appliances-1.png" alt="Appliances"
        >
        <div class="carousel-caption">
          <h3>Appliances</h3>
          <p>For kitchen and more.</p>
        </div>
      </div>

      <div class="item caroImg">
        <img src="/img/cdsdvd-3.png" alt="Entertainment">
        <div class="carousel-caption">
          <h3>Entertainment</h3>
          <p>Music, movies, and more.</p>
        </div>
      </div>
    
      <div class="item caroImg">
        <img src="/img/furniture-7.png" alt="Furniture">
        <div class="carousel-caption">
          <h3>Furniture</h3>
          <p>For livingroom, bedroom, and diningroom.</p>
        </div>
      </div>

      <div class="item caroImg">
        <img src="/img/jewelry-2.png" alt="Jewelry">
        <div class="carousel-caption">
          <h3>Jewelry</h3>
          <p>Lots of styles to choose from.</p>
        </div>
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

</body>

</html>
