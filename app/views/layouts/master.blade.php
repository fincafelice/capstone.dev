<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <title>@yield('title')</title>

@yield('css')

<style>
  .container {
  margin-bottom: 30px;
  }
</style>

@yield('top-script')

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    @yield('top-script')


    @yield('css')

    <style>
      .container {
      margin-bottom: 30px;
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
                    <a class="navbar-brand" href="/">
                    <img alt="Brand" src="/img/gsale-2.png">
                    </a>
                </div>
            </div>
        </nav>
        </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{{ action('SalesController@index') }}}">Browse Garage Sales<span class="sr-only">(current)</span></a></li>
            <li><a href="{{{ action('SalesController@create') }}}">Create Garage Sale</a></li>
            <li><a href="/tips">Garage Sale Tips</a></li>
                <li class="active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    @if (Auth::guest())
                        Login 
                    @else 
                        Welcome, {{{ Auth::user()->username }}}
                    <span class="caret"></span>
                    @endif
                </a>
                <ul class="dropdown-menu" role="menu">

                    @if (Auth::guest())
                        <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
                        <li><a href="{{{ action('UsersController@create') }}}">Create New User</a></li>
                    @else
                        <li><a href="{{{ action('SalesController@edit') }}}">Edit Your Sales</a></li>
                        <li><a href="{{{ action('HomeController@doLogout') }}}">Logout</a></li>
                    @endif
                </ul>
            </li>
        </ul>

        <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
                <input name = "search" type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/sales?search=antiques">Antiques</a></li>
                        <li><a href="/sales?search=appliances">Appliances</a></li>
                        <li><a href="/sales?search=art">Art</a></li>
                        <li><a href="/sales?search=art+supplies">Art Supplies</a></li>
                        <li><a href="/sales?search=baby">Baby</a></li>
                        <li><a href="/sales?search=books">Books</a></li>
                        <li><a href="/sales?search=children%27s+clothing">Children's Clothes</a></li>
                        <li><a href="/sales?search=collectibles">Collectibles</a></li>
                        <li><a href="/sales?search=electronics">Electronics</a></li>
                        <li><a href="/sales?search=entertainment">Entertainment</a></li>
                        <li><a href="/sales?search=furniture">Furniture</a></li>
                        <li><a href="/sales?search=gardening">Gardening</a></li>
                        <li><a href="/sales?search=glassware">Glassware</a></li>
                        <li><a href="/sales?search=health+%26+beauty">Health & Beauty</a></li>
                        <li><a href="/sales?search=home+decor">Home Decor</a></li>
                        <li><a href="/sales?search=home+improvement">Home Improvement</a></li>
                        <li><a href="/sales?search=household+items">Household Items</a></li>
                        <li><a href="/sales?search=jewelry">Jewelry</a></li>
                        <li><a href="/sales?search=kitchen">Kitchen</a></li>
                        <li><a href="/sales?search=men%27s+clothing">Men's Clothing</a></li>
                        <li><a href="/sales?search=musical+instruments">Musical Instruments</a></li>
                        <li><a href="/sales?search=sporting+goods">Sporting Goods</a></li>
                        <li><a href="/sales?search=toys">Toys</a></li>
                        <li><a href="/sales?search=women%27s+clothing">Women's Clothing</a></li>
                    </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>


    <div class="container">
        @if (Session::has('successMessage'))
    	   <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif


        @if (Session::has('errorMessage'))
          	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

    @yield('content')

    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- bootstrap.min.js -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    @yield('bottom-script')

</body>
</html>