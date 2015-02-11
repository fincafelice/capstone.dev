<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

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
			            <li><a href="#">Antiques</a></li>
			            <li><a href="#">Appliances</a></li>
			            <li><a href="#">Art</a></li>
			            <li><a href="#">Art Supplies</a></li>
			            <li><a href="#">Baby</a></li>
			            <li><a href="#">Books</a></li>
			            <li><a href="#">Children's Clothes</a></li>
			            <li><a href="#">Collectibles</a></li>
			            <li><a href="#">Electronics</a></li>
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
			            <li><a href="#">Music & Movies</a></li>
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

<div class="container">
	
	@yield('content')
	
</div>
	
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- bootstrap.min.js -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	

</body>
</html>