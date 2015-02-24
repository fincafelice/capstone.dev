<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>@yield('title')</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <![endif]-->

        <meta name="description" content="Kanzi HTML5 Template">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->
        <link rel="stylesheet" href="/kanzi/css/revolution_settings.css">
        <link rel="stylesheet" href="/kanzi/css/bootstrap.css">
        <link rel="stylesheet" href="/kanzi/css/font-awesome.css">
        <link rel="stylesheet" href="/kanzi/css/axfont.css">
        <link rel="stylesheet" href="/kanzi/css/tipsy.css">
        <link rel="stylesheet" href="/kanzi/css/prettyPhoto.css">
        <link rel="stylesheet" href="/kanzi/css/isotop_animation.css">
        <link rel="stylesheet" href="/kanzi/css/animate.css">
        <link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css'>

        <link href='/kanzi/css/style.css' rel='stylesheet' type='text/css'> 
        <link href='/kanzi/css/responsive.css' rel='stylesheet' type='text/css'>

        <link href="/kanzi/css/skins/light-blue.css" rel='stylesheet' type='text/css' id="skin-file">



        @yield('topscript')

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/respond.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/kanzi/css/color-chooser.css">

        <style>
            #logo {

                max-height: 200px;
                margin-top: -60px;
                margin-bottom: -50px;
                margin-left: -100px;
            }

            .carousel-text {
                color: #FFFFFF;
            }

            h2 {
                margin-top: 10px;
            }
            .modal-backdrop {
                z-index: 0;
            }

            .nav-label {
                float: left;
                line-height: 20px;
                display: block;
                width: 100%;
                clear: both;
                margin: 25px 0 0 0;
            }

            
            .btn, input[type="submit"], input[type="button"], button.btn, .btn-primary {
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }
        </style>

        @yield('css')

    </head>
    <body>

        <div id="wrapper">

            <div class="top_wrapper">

                <!-- Navbar Begins -->
                <div class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                            </div>
                            <div class="col-sm-5">

                                <!-- Search Box -->
                                <div class="searchbox">

                                    <form method="get" action="/sales">

                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="search" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>

                                </div>

                                <!-- //Search Box// -->
                                <div class="social-icons">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon pininterest-icon" data-original-title="pininterest">pininterest</a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="social-media-icon dribble-icon" data-original-title="dribble">dribble</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /End Navbar -->

                <!-- Header -->
                <header id="header">
                    <div class="container">

                        <div class="row header">

                            <!-- Logo -->
                            <div class="col-md-2 logo">
                                <a href="/">
                                    <img id="logo" src="/img/final-logo.png">
                                </a>
                            </div>
                            <!-- //Logo// -->


                            <!-- Navigation File -->
                            <div class="col-md-10">

                                <!-- Mobile Button Menu -->
                                <div class="mobile-menu-button">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <!-- //Mobile Button Menu// -->


                                <nav>
                                    <ul class="navigation">
                                        <li>
                                            <a href="/">
                                                <span class="label-nav">
                                                    Home
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/tips">
                                                <span class="label-nav">
                                                    Tips
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{{ action('SalesController@index') }}}">
                                                <span class="label-nav">
                                                    Browse
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{{ action('SalesController@create') }}}">
                                                <span class="label-nav">
                                                    Sell
                                                </span>
                                            </a>
                                        </li>

                                        @if (Auth::guest())
                                        <li>
                                            <!-- Button Trigger Modal -->
                                            <a data-toggle="modal" data-target="#myModal">
                                                <span class="label-nav">
                                                    Login
                                                </span>
                                            </a>
                                            <!-- //Button Trigger Modal // -->
                                        </li>
                                        <li>
                                            <!-- Login Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h3 class="modal-title" id="myModalLabel">Welcome!</h3>
                                                            <h4 class="modal-title" id="myModalLabel">Please log in to create an account</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                        {{ Form::open(array('action' => 'HomeController@doLogin')) }}

                                                            <div class="form-group">
                                                                {{ Form::label('email', 'eMail Address') }}
                                                                {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                                                            </div>

                                                            <div class="form-group">
                                                                {{ Form::label('password', 'Password') }}
                                                                {{ Form::password('password', array('class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                            <div class="form-group pull-right">
                                                                {{ Form::submit('Log In!', array('class' => 'btn btn-primary')) }}
                                                                {{ Form::close() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- //Login Modal// -->
                                        </li>
                                        <li>
                                            <a href="{{{ action('UsersController@create') }}}">
                                                <span class="label-nav">
                                                    Create Account
                                                </span>
                                            </a>
                                        </li>
                                        @else 
                                        <li>
                                            <a href="{{{ action('UsersController@show', Auth::id()) }}}">
                                                <span class="label-nav">
                                                    Dashboard
                                                </span>
                                            </a>
                                        <li>
                                            <a href="{{{ action('HomeController@doLogout') }}}">
                                                <span class="label-nav">
                                                    Logout
                                                </span>
                                            </a>
                                        </li>

                                        @endif 

                                    </ul>

                                </nav>

                                <!-- Mobile Nav. Container -->
                                <ul class="mobile-nav">
                                    <li class="responsive-searchbox">
                                        <!-- Responsive Nave -->
                                          <form method="get" action="/sales">
                                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="search" placeholder="Search.."/>
                                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                                        <input type="submit" class="searchbox-submit" value="Search"/>
                                    </form>
                                        <!-- //Responsive Nave// -->
                                    </li>
                                </ul>
                                <!-- //Mobile Nav. Container// -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- //Header// -->
            </div>

            <!-- Success/Error Messages -->
            <div class="container col-md-12">
                <div class="col-md-6 col-md-offset-3">
                    @if (Session::has('successMessage'))
                        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
                    @endif


                    @if (Session::has('errorMessage'))
                       <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
                    @endif
                </div>
            </div> 
            <!-- //Success/Error Messages// -->          

            
            <!-- Page Content Goes Here! --> 
            @yield('content')



            <footer>
                <div class="footer">

                    <div class="container">
                        <div class="footer-wrapper">
                            <div class="row">


                                <!-- Footer Col. -->
                                <div class="col-md-4 col-sm-4 footer-col">
                                    <div class="footer-content">
                                        <div class="footer-content-logo">
                                           <!--  <img src="/kanzi/images/main_logo.png" alt=""/> -->
                                           <h3>My Garage Sale</h3>
                                        </div>
                                        <div class="footer-content-text">
                                            <p>Everyone lives a busy life, and it can get a little cluttered. We'll help you clean up your act.</p>
                                            <p>My Garage Sale makes the process of decluttering much less painful and planning it much quicker!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-4 col-sm-4 footer-col">
                                    <div class="footer-title">
                                        Recent Tweets
                                    </div>
                                    <div class="footer-content footer-recent-tweets-container">
                                        <ul class="tweetList footer-recent-tweets">
                                            <li class="tweet_content item">
                                                <p>I could never have organized my garage sale without the helpful tips! </p>
                                                <p class="timestamp">2 days ago</p>
                                            </li>
                                            <li class="tweet_content item">
                                                <p>It was a great success.  Thanks to "My Garage Sale!" <a href="http://t.co/1qRP8K1wjG">Check it out!</a></p>
                                                <p class="timestamp">4 days ago</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                                <!-- Footer Col. -->
                                <div class="col-md-4 col-sm-4 footer-col">
                                    <div class="footer-title">
                                        Links
                                    </div>
                                    <div class="footer-content">
                                        <ul class="footer-category-list">
                                            <li>
                                                <a href="http://www.salvationarmyusa.org/">Giving to Charity - Salvation Army</a>
                                            </li>
                                            <li>
                                                <a href="https://www.usps.com/">Planning a Move? USPS</a>
                                            </li>
                                            <li>
                                                <a href="http://www.sanantonio.gov/ces/garagesales.aspx">City Permits</a>
                                            </li>
                                            <li>
                                                <a href="http://insurejoy.com/">Need Insurance? Insurejoy</a>
                                            </li>
                                            <li>
                                                <a href="http://roversleepover.io/">Have Pets? Rover Sleepover </a>
                                            </li>
                                            <li>
                                                <a href="http://servesearch.us/">Service Minded?
                                                Serve Search  </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- //Footer Col.// -->


                            </div>
                        </div>

                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 center-text">
                                    <div class="copyright-text">&copy; 2015 My Garage Sale | <a href="http://www.activeaxon.com" target="_blank">Team Garage</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div><!-- wrapper end -->

        <script type="text/javascript" src="/kanzi/js/_jq.js"></script>

        <script type="text/javascript" src="/kanzi/js/_jquery.placeholder.js"></script>

        <script src="/kanzi/js/activeaxon_menu.js" type="text/javascript"></script> 
        <script src="/kanzi/js/animationEnigne.js" type="text/javascript"></script> 
        <script src="/kanzi/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="/kanzi/js/ie-fixes.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jq.appear.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.base64.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.cycle.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.cycle2.carousel.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.easing.1.3.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.easytabs.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.infinitescroll.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.isotope.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jQuery.scrollPoint.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.themepunch.revolution.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.tipsy.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jquery.validate.js" type="text/javascript"></script> 
        <script src="/kanzi/js/jQuery.XDomainRequest.js" type="text/javascript"></script> 
        <script src="/kanzi/js/kanzi.js" type="text/javascript"></script> 
        <script src="/kanzi/js/retina.js" type="text/javascript"></script> 

        @yield('bottomscript')
    </body>
</html>