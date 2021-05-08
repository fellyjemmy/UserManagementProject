<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->

        <link rel="stylesheet" href="{{asset("welcome/css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("welcome/font-awesome.min.css")}}">
        <link rel="stylesheet" href="{{asset("welcome/css/owl.carousel.css")}}">
        <link rel="stylesheet" href="{{asset("welcome/css/animate.css")}}">
        <link rel="stylesheet" href="{{asset("welcome/css/main.css")}}">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="{{asset("welcome/css/responsive.css")}}">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!--
	    Header start
	    ==================== -->
	    <div class="navbar-default navbar-fixed-top" id="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">
                        <img class="logo-1" src="{{asset("welcome/images/logo.png")}}" alt="LOGO">
	                    <img class="logo-2" src="{{asset("welcome/images/logo-2.png")}}" alt="LOGO">
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    @if (Route::has('login'))
                        <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                            @auth
	                    <!-- <li class="current"><a href="{{ url('users.home') }}">Home</a></li> -->
                      <li class="current"><a href="{{route('home')}}">Home</a></li>

                      @else
	                    <li><a href="{{ route('login') }}">Log in</a></li>
                      @if (Route::has('register'))

	                    <li><a href="{{ route('register') }}">Register</a></li>
                      @endif
                  @endauth
                </div>
            @endif
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

	    <section id="hero-area">
	        <div class="container">
	            <div class="row">

	                <div class="col-md-6 wow zoomIn">
	                    <div class="block">
	                        <div class="counter text-center">
	                            <ul id="countdown_dashboard">
	                                <li>
	                                    <div class="dash days_dash">
	                                        <div class="digit">0</div>
	                                        <div class="digit">0</div>
	                                        <div class="digit">0</div>
	                                        <span class="dash_title">Days</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash hours_dash">
	                                        <div class="digit">0</div>
	                                        <div class="digit">0</div>
	                                        <span class="dash_title">Hours</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash minutes_dash">
	                                        <div class="digit">0</div>
	                                        <div class="digit">0</div>
	                                        <span class="dash_title">Minutes</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash seconds_dash">
	                                        <div class="digit">0</div>
	                                        <div class="digit">0</div>
	                                        <span class="dash_title">Seconds</span>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->



        <!--
        About start
        ==================== -->
        <!-- #about close -->
        <!--
        About start
        ==================== -->

        <!--
        Service start
        ==================== -->
        <!-- #service close -->

        <!-- #call-to-action close -->

        <!--
        Contact start
        ==================== -->







        <!-- Js -->
        <script src="{{asset("welcome/js/vendor/modernizr-2.6.2.min.js")}}"></script>
        <script src="{{asset("welcome/js/vendor/jquery-1.10.2.min.js")}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="{{asset("welcome/js/jquery.lwtCountdown-1.0.js")}}"></script>
        <script src="{{asset("welcome/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("welcome/js/owl.carousel.min.js")}}"></script>
        <script src="{{asset("welcome/js/jquery.validate.min.js")}}"></script>
        <script src="{{asset("welcome/js/jquery.form.js")}}"></script>
        <script src="{{asset("welcome/js/jquery.nav.js")}}"></script>
        <script src="{{asset("welcome/js/jquery.sticky.js")}}"></script>
        <script src="{{asset("welcome/js/plugins.js")}}"></script>
        <script src="{{asset("welcome/js/wow.min.js")}}"></script>
        <script src="{{asset("welcome/js/main.js")}}"></script>

    </body>
</html>
