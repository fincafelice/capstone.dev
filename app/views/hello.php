<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
<style>
	
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
}

body {
	
	padding: 50px;
}
 </style>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                <img alt="Brand" src="...">
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
                  <li><a href="#">Appliances</a></li>
                  <li><a href="#">Art</a></li>
                  <li><a href="#">Books</a></li>
                  <li><a href="#">CDs</a></li>
                  <li><a href="#">DvDs</a></li>
                  <li><a href="#">Electronics</a></li>
                  <li><a href="#">Framed Art</a></li>
                  <li><a href="#">Furniture</a></li>
                  <li><a href="#">Jewlery</a></li>
                  <li><a href="#">ETC..</a></li>
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


<!--   	<table style="width:10%">
  		<tr>
    		<th>Catergories</th>
  		</tr>
  		<tr>
    		<td href='http://capstone.dev' style="cursor:pointer">Art</td>
  		</tr>
  		<tr>
    		<td>Books</td>
  		</tr>
  		<tr>
    		<td>Electronics</td>
  		</tr>
	</table> -->


</html>
