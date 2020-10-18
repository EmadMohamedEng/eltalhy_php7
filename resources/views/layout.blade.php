<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- internet explorer meta-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--first mobile meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>الموقع الرسمى للسيد أحمد الطلحي</title>
        <link href="{{ url('https://fonts.googleapis.com/css?family=Changa:700')}}" rel="stylesheet">
        <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ url('css/slick.css')}}" rel="stylesheet">
        <link href="{{ url('css/slick-theme.css')}}" rel="stylesheet">
        <link href="{{ url('css/animate.css')}}" rel="stylesheet">
        <link href="{{ url('css/hover-min.css')}}" rel="stylesheet">
        <link href="{{ url('css/lightGallery.css')}}" rel="stylesheet">
        @yield('style')
        <link href="{{ url('css/style.css')}}" rel="stylesheet">
        <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/')}}"><img src="{{url('/')."/".Helper::get_setting_by_key('website_logo')}}" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="{{ url('/')}}">الرئيسية <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('/about')}}">السيرة الذاتية</a></li>
                <li><a href="{{ url('/photos')}}">صور</a></li>
                <li><a href="{{ url('/sounds')}}">صوتيات</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فيديوهات <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('/videos')}}">برامج</a></li>
                    <li><a href="{{ url('/videos')}}">مقابلات تلفزيونية</a></li>
                  </ul>
                </li>

                  <li><a href="{{ url('/messages')}}">وما أبرئ نفسي</a></li>
                  <li><a href="{{ url('/contact')}}">أتصل بنا</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--Start Contant-->

        @yield('content')

        <!--//End Contant-->
        <!--Footer Section -->
        <footer>
            <div class="container">
                <ul class="list-unstyled">
                    <li><a class="sc" href="#"><i class="fa fa-soundcloud"></i></a></li>
                    <li><a class="tl" href="#"><i class="fa fa-telegram"></i></a></li>
                    <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="ns" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="gp" href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="copy-right text-center">
                تصميم &amp; برمجة <a href="#">IVAS</a>
            </div>
        </footer>
        <!--//Footer Section -->

        <!-- scripts -->
        <script src="{{ url('js/jquery-3.1.0.min.js')}}"></script>

        <script src="{{ url('js/bootstrap.min.js')}}"></script>
        <script src="{{ url('js/slick.min.js')}}"></script>
        <script src="{{ url('js/lightGallery.js')}}"></script>

        <script src="{{ url('js/wow.min.js')}}"></script>
        <script src="{{ url('js/plugins.js')}}"></script>
        @yield('script')

    </body>
</html>
