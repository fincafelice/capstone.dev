<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Garage Sale</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	

<style>	
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
    }
    img {
      height: 75px;
      width: 75px;
      position: relative; top: -15px;
    }
    .caroImg {
      image-rendering: auto;
      max-height: 50%;
    }
</style>


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">

                <img alt="Brand" src="/img/gsale-2.png">

                </a>
            </div>
          </div>
      </nav>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{{ action('SalesController@create') }}}">Buyer<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Seller</a></li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
                  <li><a href="{{{ action('UsersController@create') }}}">Create User</a></li>
                  <li><a href="{{{ action('SalesController@create') }}}">Create Sale</a></li>
                  <li class="divider"></li>
                  <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
                </ul>
            </li>
          </ul>
        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Antiques</a></li>
                  <li><a href="#">Appliances</a></li>
                  <li><a href="#">Art</a></li>
                  <li><a href="#">Art Supplies</a></li>
                  <li><a href="#">Baby</a></li>
                  <li><a href="#">Books</a></li>
                  <li><a href="#">Children's Clothes</a></li>
                  <li><a href="#">Collectibles</a></li>
                  <li><a href="#">Electronics</a></li>
                  <li><a href="#">Entertainment</a></li>
                  <li><a href="#">Furniture</a></li>
                  <li><a href="#">Gardening</a></li>
                  <li><a href="#">Glassware</a></li>
                  <li><a href="#">Health & Beauty</a></li>
                  <li><a href="#">Home Decor</a></li>
                  <li><a href="#">Home Improvement</a></li>
                  <li><a href="#">Household Items</a></li>
                  <li><a href="#">Jewelry</a></li>
                  <li><a href="#">Kitchen</a></li>
                  <li><a href="#">Men's Clothing</a></li>
                  <li><a href="#">Musical Instruments</a></li>
                  <li><a href="#">Sporting Goods</a></li>
                  <li><a href="#">Toys</a></li>
                  <li><a href="#">Women's Clothing</a></li>
                </ul>
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
	
<h1 align = center>My Garage Sale.</h1>

<div class="container">

  <div class="row">
    <div class="col-sm-4">
    	<h3>Learn more about finding garage sales here!</h3>
    	<p>Descriptive Paragraph and then a link</p>
    </div>
    <div class="col-sm-4">
    	<h3>Learn more about being a seller here!</h3>
    	<p>Descriptive paragraph and then a link</p>
    </div>
    <div class="col-sm-4">
    	<h3>Learn more about Garage Sales Here!</h3>
    		<p align = center>
    		Tips for buyers.<br>
    		Tips for sellers.<br>
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

</html>
