<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link href="{{env('APP_URL')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{env('APP_URL')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{env('APP_URL')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{env('APP_URL')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{env('APP_URL')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{env('APP_URL')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{env('APP_URL')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="{{env('APP_URL')}}/build/css/custom.min.css" rel="stylesheet">

    <link href="{{env('APP_URL')}}/vendors/datatables.net/jquery.dataTables.min.css" rel="stylesheet">


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>




</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{env('APP_URL')}}/" class="site_title"><i class="fa fa-paw"></i> <span>{{ config('app.name') }}</span></a>
                </div>

                <div class="clearfix"></div>
            @if(Auth::check())
                <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{env('APP_URL')}}/images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{ Auth::user()->username }}</h2>
                        </div>
                    </div>
            @endif
            <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">

                        <ul class="nav side-menu">
                            @if(Auth::check())
                                @if(Auth::user()->is_admin)
                                    <h3>Admin</h3>
                                    <li><a><i class="fa fa-home"></i> Admin <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{env('APP_URL')}}/admin">Admin Dashboard</a></li>
                                            <li><a>Caches<span class="fa fa-chevron-down"></span></a>
                                                <ul class="nav child_menu">
                                                    <li class="sub_menu"><a href="{{env('APP_URL')}}/admin/caches">List Caches</a>
                                                    </li>
                                                    <li><a href="{{env('APP_URL')}}/admin/caches/new">Add Cache</a>
                                                    </li>
                                                    <li><a href="{{env('APP_URL')}}/admin/caches/awaitingApproval">Awaiting Approval</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{env('APP_URL')}}/admin/users">Users</a></li>
                                        </ul>
                                    </li>
                                @endif
                            @endif
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{env('APP_URL')}}/">Home</a></li>
                                    <li><a href="{{env('APP_URL')}}/caches">Caches</a></li>
                                    <li><a href="{{env('APP_URL')}}/events">Events</a></li>
                                    <li><a href="{{env('APP_URL')}}/users">Users</a></li>
                                </ul>
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
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                        @if(Auth::check())
                            <li class="">

                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{env('APP_URL')}}/images/user.png" alt="">{{ Auth::user()->username }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{env('APP_URL')}}/profile"> Profile</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/login">Login</a></li>
                        @endif

                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- /top navigation -->
    <!-- page content -->
    <div class="right_col" role="main">
    @yield('content')

    <!-- footer content -->
        <footer>
            <div class="pull-right">
                Original Template By <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<!-- Bootstrap -->
<script src="{{env('APP_URL')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{env('APP_URL')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{env('APP_URL')}}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{env('APP_URL')}}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{env('APP_URL')}}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{env('APP_URL')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{env('APP_URL')}}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{env('APP_URL')}}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<!-- DateJS -->
<script src="{{env('APP_URL')}}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->

<!-- bootstrap-daterangepicker -->
<script src="{{env('APP_URL')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{env('APP_URL')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{env('APP_URL')}}/build/js/custom.min.js"></script>
</body>
</html>
