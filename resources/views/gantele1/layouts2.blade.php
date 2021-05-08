<!DOCTYPE html>
<html lang="en">

@include('gantele.partials.head')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{asset("production/index.html")}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset("production/images/img.jpg")}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('gantele.partials.sidebar')
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('gantele.partials.top')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('gantele.partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
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
    <script sr<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>c="{{asset("vendors/Flot/jquery.flot.js")}}"></script>
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
