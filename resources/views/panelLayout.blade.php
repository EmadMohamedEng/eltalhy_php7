<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blank Page - FLATY Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ url('dashboard/assets/font-awesome/css/font-awesome.min.css')}}">

        <!--page specific css styles-->
        <link rel="stylesheet" href="{{ url('dashboard/assets/chosen-bootstrap/chosen.min.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/jquery-tags-input/jquery.tagsinput.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/jquery-pwstrength/jquery.pwstrength.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/dropzone/downloads/css/dropzone.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/clockface/css/clockface.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-datepicker/css/datepicker.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}" />
        <link rel="stylesheet" href="{{ url('dashboard/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <!--flaty css styles-->
        <link rel="stylesheet" href="{{ url('dashboard/css/flaty.css')}}">
        <link rel="stylesheet" href="{{ url('dashboard/css/flaty-responsive.css')}}">

        <link rel="shortcut icon" href="{{ url('dashboard/img/favicon.png')}}">
    </head>
    <body>

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="{{url('/panel')}}">
                <small>
                    <i class="fa fa-desktop"></i>
                    IVAS Admin
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        {{-- <img class="nav-user-photo" src="{{ url('dashboard/img/demo/avatar/avatar1.jpg')}}" alt="abdelrahman's Photo" /> --}}
                        <span id="user_info">
                            {{Auth::user()->name}}
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                       {{--  <li class="nav-header">
                            <i class="fa fa-clock-o"></i>
                            Logined From 20:45
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li> --}}

                        <li>
                            <a href="{{url('auth/logout')}}">
                                <i class="fa fa-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN User Dropdown -->
                </li>
                <!-- END Button User -->
            </ul>
            <!-- END Navbar Buttons -->
        </div>
        <!-- END Navbar -->

        <!-- BEGIN Container -->
        <div class="container" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="navbar-collapse collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <li>
                        <a href="{{url('/panel')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span>User</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('user')}}">Users</a></li>
                            <li><a href="{{url('user/new')}}">New User</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span>Employee</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('employee')}}">Employees</a></li>
                            <li><a href="{{url('employee/new')}}">New Employee</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-users"></i>
                            <span>Job</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('job')}}">Jobs</a></li>
                            <li><a href="{{url('job/new')}}">New Job</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-info"></i>
                            <span>Category</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('category')}}">Categories</a></li>
                            <li><a href="{{url('category/new')}}">New Category</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-money"></i>
                            <span>Client</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('client')}}">Clients</a></li>
                            <li><a href="{{url('client/new')}}">New Client</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-gears"></i>
                            <span>Setting</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('setting')}}">Settings</a></li>
                            <li><a href="{{url('setting/new')}}">New Setting</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-bars"></i>
                            <span>Slider</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('slider')}}">Sliders</a></li>
                            <li><a href="{{url('slider/new')}}">New Slider</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-rss-square"></i>
                            <span>Article</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('article')}}">Articles</a></li>
                            <li><a href="{{url('article/new')}}">New Article</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Service</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('service')}}">Services</a></li>
                            <li><a href="{{url('service/new')}}">New Service</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Statistic</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="{{url('statistic')}}">Statistics</a></li>
                            <li><a href="{{url('statistic/new')}}">New Statistic</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="{{url('career')}}" class="dropdown-toggle">
                            <i class="fa fa-briefcase"></i>
                            <span>Careers</span>
                        </a>
                        <!-- END Submenu -->
                    </li>

                    

                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-lg">
                    <i class="fa fa-angle-double-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                @yield('content')
                <!-- END Main Content -->
                
                <footer>
                    <p>2017 © Ivas Company.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="{{ url('dashboard/assets/jquery/jquery-2.1.4.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/jquery-cookie/jquery.cookie.js')}}"></script>

        <!--page specific plugin scripts-->
         <!--page specific plugin scripts-->
        <script src="{{ url('dashboard/assets/chosen-bootstrap/chosen.jquery.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js')}}"></script>
        <script src="{{ url('dashboard/assets/dropzone/downloads/dropzone.min.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
        <script src="{{ url('dashboard/assets/clockface/js/clockface.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-daterangepicker/date.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-switch/static/js/bootstrap-switch.js')}}"></script>
        <script src="{{ url('dashboard/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script> 
        <script src="{{ url('dashboard/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
        <script src="{{ url('dashboard/assets/ckeditor/ckeditor.js')}}"></script> 

        <!--flaty scripts-->
        <script src="{{ url('dashboard/js/flaty.js')}}"></script>
        <script src="{{ url('dashboard/js/flaty-demo-codes.js')}}"></script>
        
        @yield('contentScript') 

    </body>
</html>
