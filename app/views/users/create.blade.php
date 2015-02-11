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

body {
	padding: 50px;
}
</style>

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
        <li class="active"><a href="#">Buyer <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Seller</a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Login</a></li>
            <li><a href="#">Create User</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
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



<form>
First name:<br>
<input type="text" name="firstname">
<br>
Last name:<br>
<input type="text" name="lastname">
<br>


<input type="radio" name="sex" value="male" checked>Male
<br>
<input type="radio" name="sex" value="female">Female
<br>

Email:<br>
<input type="text" name="email">
<br>
Password:<br>
<input type="text" name="passowrd">
<br>

Street:<br>
<input type="text" name="street">
<br>
City:<br>
<input type="text" name="city">
<br>
State:<br>
<select>
  <option>NJ</option>
  <option>CT</option>
  <option>DE</option>
</select>

<br>
Zip:<br>
<input type="text" name="zip">
<br>

<input type="submit" value="Submit">
</form> 
