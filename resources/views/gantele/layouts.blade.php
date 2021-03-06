<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset("build/images/favicon.ico")}}" type="image/ico" />

  <title>User Management </title>

  <!-- Bootstrap -->
  <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset("vendors/nprogress/nprogress.css")}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset("vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{asset("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{asset("vendors/jqvmap/dist/jqvmap.min.css")}}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset("build/css/custom.min.css")}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset("css/jquery-ui.css")}}">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset("production/images/user.png")}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a  href="{{route('home')}}"><i class="fa fa-home"></i> Home </a>
                  <ul class="nav child_menu">
                    <!-- <li><a href="{{route('home')}}">Dashboard</a></li> -->

                  </ul>
                </li>
                <li><a href="{{route('users.index')}}"><i class="fa fa-users" style="font-size:18px"></i>Users</a></li>


    <li><a href="{{route('categories.index')}}"><i class="fa fa-product-hunt "></i> Product Categories <span class=""></span></a>
</li>

<li><a href="{{route('products.index')}}"><i class="	fa fa-paypal "></i> Products <span class=""></span></a>
</li>

              </ul>
            </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset("build/images/img.jpg")}}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="{{route('user_profile')}}"> Profile</a></li>
                    <li><a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> {{ __('Log out') }}</a></li>
                  </ul>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>


              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            <!-- yield content here -->

                    <!-- page content -->
                    @yield('content')




          <!-- top tiles -->

          <!-- /top tiles -->


          <br />


                    </div>
                  </div>
                </div>

              </div>






                          <!-- /page content -->

                          <!-- footer content -->
                          <footer>
                            <div class="pull-right">
                            <a href="https://colorlib.com">Colorlib</a>
                            </div>
                            <div class="clearfix"></div>
                          </footer>
                          <!-- /footer content -->
                        </div>
                      </div>

                      <!-- jQuery -->

                      <script src="{{asset("js/jquery-1.12.1.js")}}"></script>
                      <script src="{{asset("js/jquery-ui.js")}}"></script>
                      <script src="{{asset("vendors/jquery/dist/jquery.min.js")}}"></script>
                      <!-- Bootstrap -->
                      <script src="{{asset("vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
                      <!-- FastClick -->
                      <script src="{{asset("vendors/fastclick/lib/fastclick.js")}}"></script>
                      <!-- NProgress -->
                      <script src="{{asset("vendors/nprogress/nprogress.js")}}"></script>
                      <!-- Chart.js -->
                      <script src="{{asset("vendors/Chart.js/dist/Chart.min.js")}}"></script>
                      <!-- gauge.js -->
                      <script src="{{asset("vendors/gauge.js/dist/gauge.min.js")}}"></script>
                      <!-- bootstrap-progressbar -->
                      <script src="{{asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"></script>
                      <!-- iCheck -->
                      <script src="{{asset("vendors/iCheck/icheck.min.js")}}"></script>
                      <!-- Skycons -->
                      <script src="{{asset("vendors/skycons/skycons.js")}}"></script>
                      <!-- Flot -->
                      <script src="{{asset("vendors/Flot/jquery.flot.js")}}"></script>
                      <script src="{{asset("vendors/Flot/jquery.flot.pie.js")}}"></script>
                      <script src="{{asset("vendors/Flot/jquery.flot.time.js")}}"></script>
                      <script src="{{asset("vendors/Flot/jquery.flot.stack.js")}}"></script>
                      <script src="{{asset("vendors/Flot/jquery.flot.resize.js")}}"></script>
                      <!-- Flot plugins -->
                      <script src="{{asset("vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"></script>
                      <script src="{{asset("vendors/flot-spline/js/jquery.flot.spline.min.js")}}"></script>
                      <script src="{{asset("vendors/flot.curvedlines/curvedLines.js")}}"></script>
                      <!-- DateJS -->
                      <script src="{{asset("vendors/DateJS/build/date.js")}}"></script>
                      <!-- JQVMap -->
                      <script src="{{asset("vendors/jqvmap/dist/jquery.vmap.js")}}"></script>
                      <script src="{{asset("vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}"></script>
                      <script src="{{asset("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}"></script>
                      <!-- bootstrap-daterangepicker -->
                      <script src="{{asset("vendors/moment/min/moment.min.js")}}"></script>
                      <script src="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.js")}}"></script>

                      <!-- Custom Theme Scripts -->
                      <script src="{{asset("build/js/custom.min.js")}}"></script>

                    </body>
                    </html>
