<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ivas System - Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/font-awesome/css/font-awesome.min.css')}}">

        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="{{url('css/flaty.css')}}">
        <link rel="stylesheet" href="{{url('css/flaty-responsive.css')}}">

        <link rel="shortcut icon" href="img/favicon.png">
    </head>
    <body class="login-page">

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">

            <!-- BEGIN Login Form -->
            <form id="form-login" action="{{url('login')}}" method="post">
               {!! csrf_field() !!}
                <h3>Login to your account</h3>
                <hr/>
                @if (count($errors) > 0)

                        <div class="alert alert-danger alert-dismissible" style="padding:15px 35px 15px 0px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                @endif
                <div class="form-group">
                    <div class="controls">
                        <input type="text" name="email" placeholder="Email" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" name="password" placeholder="Password" class="form-control" />
                    </div>
                </div>
                <!-- <div class="form-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox"  value="remember" /> Remember me
                        </label>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary form-control">Sign In</button>
                    </div>
                </div>
                <hr/>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Main Content -->


        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
