<!--
/******************************************************************************
* by Abdelrahman Haridy
* Email    : abdelrahman.haridy01@gmail.com
* LinkedIn : http://linkedin.com/pub/abdelrahman-haridy/60/9a3/531/
* Phone    : 002 01020875298, 002 01020875298
* website  : http://ivas.mobi/
******************************************************************************/
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- internet explorer meta-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--first mobile meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>الموقع الرسمى للسيد أحمد الطلحي</title>
        <link href="<?php echo e(url('https://fonts.googleapis.com/css?family=Changa:700')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/font-awesome.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/slick.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/slick-theme.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/animate.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/hover-min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/lightGallery.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">
        <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <![endif]-->
    </head>
    <body style="background-image: url(<?php echo e(url('img/black-pattern.png')); ?>)">
        <div class="social_icon">
        <ul class="list-unstyled">
                    <li><a class="fb" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%facebook_link%')->first()->value; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="tw" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%twitter_link%')->first()->value; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="gp" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%youtube_link%')->first()->value; ?>"><i class="fa fa-youtube"></i></a></li>
                    <li><a class="ns" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%instagram_link%')->first()->value; ?>"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="tl" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%telegram_link%')->first()->value; ?>"><i class="fa fa-telegram"></i></a></li>
                    <li><a class="sc" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%soundcloud_link%')->first()->value; ?>"><i class="fa fa-soundcloud"></i></a></li>
        </ul>
      </div>
        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="col-md-2 col-sm-2 p-sm-0"> -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('/')."/".Helper::get_setting_by_key('website_logo')); ?>" /></a>
                <p class="name_logo"><span>ahmed</span> eltalhy</p>
              </div>
            <!-- </div> -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="col-md-10 col-sm-10 p-sm-0"> -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                  <li><a href="<?php echo e(url('/')); ?>">الرئيسية <span class="sr-only">(current)</span></a></li>
                  <li><a href="<?php echo e(url('/aboutus')); ?>">السيرة الذاتية</a></li>
                  <li><a href="<?php echo e(url('/gallary')); ?>">صور</a></li>
                  <li><a href="<?php echo e(url('/sounds')); ?>">صوتيات</a></li>
                  <li><a href="<?php echo e(url('/all_books')); ?>"> مؤلفات </a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فيديوهات <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo e(url('/videos/برامج')); ?>">برامج</a></li>
                      <li><a href="<?php echo e(url('/videos/مقابلات')); ?>">مقابلات تلفزيونية</a></li>
                    </ul>
                  </li>

                    <li><a href="<?php echo e(url('/messages')); ?>">وما أبرئ نفسي</a></li>
                    <li><a href="<?php echo e(url('/contactus')); ?>">أتصل بنا</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            <!-- </div> -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--Start Contant-->

        <?php echo $__env->yieldContent('content'); ?>

        <!--//End Contant-->
        <!--Footer Section -->
        <footer style="background-image: url(<?php echo e(url('img/bg_footer.jpg')); ?>)">
            <div class="container">
                <ul class="list-unstyled">

                    <li><a class="sc" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%soundcloud_link%')->first()->value; ?>"><i class="fa fa-soundcloud"></i></a></li>
                    <li><a class="tl" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%telegram_link%')->first()->value; ?>"><i class="fa fa-telegram"></i></a></li>
                    <li><a class="ns" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%instagram_link%')->first()->value; ?>"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="gp" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%youtube_link%')->first()->value; ?>"><i class="fa fa-youtube"></i></a></li>
                    <li><a class="tw" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%twitter_link%')->first()->value; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="fb" target="_blank" href="<?php echo DB::table('settings')->where('key','like','%facebook_link%')->first()->value; ?>"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="copy-right text-center">
                تصميم &amp; برمجة <a href="#">IVAS</a>
            </div>
        </footer>
        <!--//Footer Section -->

        <!-- scripts -->
        <script src="<?php echo e(url('js/jquery-3.1.0.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/lightGallery.js')); ?>"></script>
        <script src="<?php echo e(url('js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/plugins.js')); ?>"></script>
        <script src="<?php echo e(url('js/jquery.lazyload.js')); ?>"></script>
        <script>
            $(document).ready(function(){
                $("#subscribeFrom").submit(function(e){
                    e.preventDefault();
                    var contact_email = $('#subscribeFrom input[name="contact_email"]').val();
                    //alert(contact_email);
                    $.ajax({
                        url: '<?php echo e(url('newsletter')); ?>',
                        type: 'post',
                        data: $(this).serialize(),
                    })
                    .done(function(data) {
                        console.log(data.success);
                        $('.text-success').html(data.success);
                        $('#subscribeFrom input[name="contact_email"]').val('');
                    })
                    .fail(function() {
                        console.log("error");
                    })
                });

                $(function() {
                    $("img.lazy").lazyload();
                });
            });
            function modal() {
                $('#commingSoon').modal('toggle');
            }
        </script>

        <?php echo $__env->yieldContent('scriptActive'); ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/layouts/layout.blade.php ENDPATH**/ ?>