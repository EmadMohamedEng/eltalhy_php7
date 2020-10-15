<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{$title}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">

        <!--page specific css styles-->
        <link rel="stylesheet" href="{{url('assets/prettyPhoto/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{url('assets/chosen-bootstrap/chosen.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/chosen-bootstrap/chosen.min.css')}}" />
        <link rel="stylesheet" href="{{url('assets/jquery-tags-input/jquery.tagsinput.css')}}" />
        <link rel="stylesheet" href="{{url('assets/jquery-pwstrength/jquery.pwstrength.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css')}}" />
        <link rel="stylesheet" href="{{url('assets/dropzone/downloads/css/dropzone.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
        <link rel="stylesheet" href="{{url('assets/clockface/css/clockface.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-datepicker/css/datepicker.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}" />
        <link rel="stylesheet" href="{{url('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />

        <!--flaty css styles-->
        <link rel="stylesheet" href="{{url('css/flaty.css')}}">
        <link rel="stylesheet" href="{{url('css/flaty-responsive.css')}}">

        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body>


        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
                <span class="fa fa-bars"></span>
            </button>
            <a class="navbar-brand" href="#">
                <small>
                    <i class="fa fa-desktop"></i>
                    El-Talhy Dashboard
                </small>
            </a>

            <!-- BEGIN Navbar Buttons -->
            <ul class="nav flaty-nav pull-right">

                <!-- BEGIN Button User -->
                <li class="user-profile">
                    <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                        {{-- <img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" /> --}}
                        <span class="hhh" id="user_info">
                            {{Auth::user()->name}}
                        </span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- BEGIN User Dropdown -->
                    <ul class="dropdown-menu dropdown-navbar" id="user_menu">

                        <li>
                            <a href="{{url('user/'.Auth::user()->id.'/edit')}}">
                                <i class="fa fa-pencil"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{url('auth/logout')}}">
                                <i class="fa fa-sign-out"></i>
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
                    <li id="dashboard">
                        <a href="{{url('/dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li id="user">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="user-index"><a href="{{url('user')}}">Users</a></li>
                            <li id="user-new"><a href="{{url('user/new')}}">New User</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <li id="contact">
                        <a href="{{url('/contact')}}">
                            <i class="fa fa-envelope"></i>
                            <span>Contacts</span>
                        </a>
                    </li>

                    <li id="newsletter">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-send"></i>
                            <span>NewsLetter</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>
                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="newsletter-index"><a href="{{url('/newsletter')}}">NewsLetters</a></li>
                            <li id="newsletter-new"><a href="{{url('newsletter/campaign/new')}}">New Campaign</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>


                    <li id="category">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-info"></i>
                            <span>Category</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="category-index"><a href="{{url('category')}}">Categories</a></li>
                            <li id="category-new"><a href="{{url('category/new')}}">New Category</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="photo">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-picture-o"></i>
                            <span>Photo</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="photo-index"><a href="{{url('photo')}}">Photos</a></li>
                            <li id="photo-new"><a href="{{url('photo/new')}}">New Photo</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="video">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa  fa-youtube"></i>
                            <span>Video</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="video-index"><a href="{{url('video')}}">Videos</a></li>
                            <li id="video-new"><a href="{{url('video/new')}}">New Video</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="audio">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa  fa-soundcloud"></i>
                            <span>Audio</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="audio-index"><a href="{{url('audio')}}">Audios</a></li>
                            <li id="audio-new"><a href="{{url('audio/new')}}">New Audio</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="album">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-picture-o"></i>
                            <span>Audio Albums</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="album-index"><a href="{{url('album')}}">Albums</a></li>
                            <li id="album-new"><a href="{{url('album/new')}}">New Album</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="setting">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-gears"></i>
                            <span>Setting</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="setting-index"><a href="{{url('setting')}}">Settings</a></li>
                            <li id="setting-new"><a href="{{url('setting/new')}}">New Setting</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="slider">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa fa-bars"></i>
                            <span>Slider</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="slider-index"><a href="{{url('slider')}}">Sliders</a></li>
                            <li id="slider-new"><a href="{{url('slider/new')}}">New Slider</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                     <li id="message">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa  fa-envelope"></i>
                            <span>Messages</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="message-index"><a href="{{url('message')}}">Messages</a></li>
                            <li id="message-new"><a href="{{url('message/new')}}">New Message</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="about">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa  fa-info"></i>
                            <span>Abouts</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="about-index"><a href="{{url('about')}}">Abouts</a></li>
                            <li id="about-new"><a href="{{url('about/new')}}">New About</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li id="mentor">
                      <a href="#" class="dropdown-toggle">
                          <i class="fa fa-picture-o"></i>
                          <span>Mentor</span>
                          <b class="arrow fa fa-angle-right"></b>
                      </a>

                      <!-- BEGIN Submenu -->
                      <ul class="submenu">
                          <li id="mentor-index"><a href="{{url('mentor')}}">Mentor</a></li>
                          <li id="mentor-new"><a href="{{url('mentor/new')}}">New Mentor</a></li>
                      </ul>
                      <!-- END Submenu -->
                  </li>

                    <li id="book">
                        <a href="#" class="dropdown-toggle">
                            <i class="fa  fa-info"></i>
                            <span>Books</span>
                            <b class="arrow fa fa-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li id="book-index"><a href="{{url('book')}}">Books</a></li>
                            <li id="book-new"><a href="{{url('book/new')}}">New Book</a></li>
                        </ul>
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

            @yield('content')
        </div>
        <!-- END Container -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{url('assets/jquery-cookie/jquery.cookie.js')}}"></script>

        <!--page specific plugin scripts-->
        <script src="{{url('assets/flot/jquery.flot.js')}}"></script>
        <script src="{{url('assets/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{url('assets/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{url('assets/flot/jquery.flot.stack.js')}}"></script>
        <script src="{{url('assets/flot/jquery.flot.crosshair.js')}}"></script>
        <script src="{{url('assets/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('assets/sparkline/jquery.sparkline.min.js')}}"></script>

        <script src="{{url('assets/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
        <script src="{{url('assets/chosen-bootstrap/chosen.jquery.min.js')}}"></script>
        <script src="{{url('assets/chosen-bootstrap/chosen.jquery.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
        <script src="{{url('assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
        <script src="{{url('assets/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js')}}"></script>
        <script src="{{url('assets/dropzone/downloads/dropzone.min.js')}}"></script>
        <script src="{{url('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
        <script src="{{url('assets/clockface/js/clockface.js')}}"></script>
        <script src="{{url('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
        <script src="{{url('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{url('assets/bootstrap-daterangepicker/date.js')}}"></script>
        <script src="{{url('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{url('assets/bootstrap-switch/static/js/bootstrap-switch.js')}}"></script>
        <script src="{{url('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{url('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
        <script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
        <!--flaty scripts-->
        <script src="{{url('js/flaty.js')}}"></script>
        <script src="{{url('js/flaty-demo-codes.js')}}"></script>
        <script>
            function ConfirmDelete() {
                var x = confirm("Are you sure you want to delete?");
                if (x)
                  return true;
                else
                  return false;
            }
        </script>
        @yield('customScript')

    </body>
</html>
