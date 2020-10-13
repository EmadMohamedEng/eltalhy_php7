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
        <link href="https://fonts.googleapis.com/css?family=Changa:700" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/hover-min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <![endif]-->
        <style>
            .sj-book .p1,
            .sj-book .p2,
            .sj-book .p3, 
            .sj-book .p73, 
            .sj-book .p74{
                background-color:white;
                background-image:url(books/pics/book-covers.jpg) !important;
            }
        </style>
        <!-- js for books -->
        <script type="text/javascript" src="books/js/jquery.min.1.7.js"></script>
        <script type="text/javascript" src="books/js/jquery-ui-1.8.20.custom.min.js"></script>
        <script type="text/javascript" src="books/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="books/js/modernizr.2.5.3.min.js"></script>
        <script type="text/javascript" src="books/js/hash.js"></script>
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
              <a class="navbar-brand" href="#"><img src="img/lg.png" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="/">الرئيسية <span class="sr-only">(current)</span></a></li>
                <li><a href="#">السيرة الذاتية</a></li>
                <li><a href="/photos">صور</a></li>
                <li><a href="/sounds">صوتيات</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فيديوهات <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/videos">برامج</a></li>
                    <li><a href="/videos">مقابلات تلفزيونية</a></li>
                  </ul>
                </li>
                  
                  <li><a href="#">أتصل بنا</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--Start Contant-->
        <!-- clear section -->
        <section class="clear_sec in_pages">
            <div class="bg-opacity">
                <div class="container">
                    <div class="info">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ol class="breadcrumb">
                                    <li><a href="#">الرئيسية</a></li>
                                    <li><a href="#">كتب</a></li>
                                    <li class="active"><a href="#">أساس علوم الدين</a></li>
                                </ol>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h1>كتب</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //clear section -->
        <section class="single-book-page pages-body">
            <div class="container">
                <div id="canvas" class="hidden-sm hidden-xs">
                    <div id="book-zoom">
                        <div class="sj-book">
                            <div depth="5" class="hard"> <div class="side"></div> </div>
                            <div depth="5" class="hard front-side"> <div class="depth"></div> </div>
                            <!--<div class="own-size"></div>-->
                            <!--<div class="own-size even"></div>-->
                            <div class="hard fixed back-side p73"> <div class="depth"></div> </div>
                            <div class="hard p74"></div>
                        </div>
                    </div>
                    <!--<div id="slider-bar" class="turnjs-slider">
                        <div id="slider"></div>
                    </div>-->
                </div>
                <div class="hidden-md hidden-lg">
                    <object data="books\pics\book1\book.pdf" type="application/pdf" width="100%" height="100%">
                        <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
                    </object>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            function loadApp() {
                
                var flipbook = $('.sj-book');

                // Check if the CSS was already loaded
                
                if (flipbook.width()==0 || flipbook.height()==0) {
                    setTimeout(loadApp, 10);
                    return;
                }

                // Mousewheel

                $('#book-zoom').mousewheel(function(event, delta, deltaX, deltaY) {

                    var data = $(this).data(),
                        step = 30,
                        flipbook = $('.sj-book'),
                        actualPos = $('#slider').slider('value')*step;

                    if (typeof(data.scrollX)==='undefined') {
                        data.scrollX = actualPos;
                        data.scrollPage = flipbook.turn('page');
                    }

                    data.scrollX = Math.min($( "#slider" ).slider('option', 'max')*step,
                        Math.max(0, data.scrollX + deltaX));

                    var actualView = Math.round(data.scrollX/step),
                        page = Math.min(flipbook.turn('pages'), Math.max(1, actualView*2 - 2));

                    if ($.inArray(data.scrollPage, flipbook.turn('view', page))==-1) {
                        data.scrollPage = page;
                        flipbook.turn('page', page);
                    }

                    if (data.scrollTimer)
                        clearInterval(data.scrollTimer);
                    
                    data.scrollTimer = setTimeout(function(){
                        data.scrollX = undefined;
                        data.scrollPage = undefined;
                        data.scrollTimer = undefined;
                    }, 1000);

                });

                // Slider

                $( "#slider" ).slider({
                    min: 1,
                    max: 100,

                    start: function(event, ui) {

                        if (!window._thumbPreview) {
                            _thumbPreview = $('<div />', {'class': 'thumbnail'}).html('<div></div>');
                            setPreview(ui.value);
                            _thumbPreview.appendTo($(ui.handle));
                        } else
                            setPreview(ui.value);

                        moveBar(false);

                    },

                    slide: function(event, ui) {

                        setPreview(ui.value);

                    },

                    stop: function() {

                        if (window._thumbPreview)
                            _thumbPreview.removeClass('show');
                        
                        $('.sj-book').turn('page', Math.max(1, $(this).slider('value')*2 - 2));

                    }
                });


                // URIs
                
                Hash.on('^page\/([0-9]*)$', {
                    yep: function(path, parts) {

                        var page = parts[1];

                        if (page!==undefined) {
                            if ($('.sj-book').turn('is'))
                                $('.sj-book').turn('page', page);
                        }

                    },
                    nop: function(path) {

                        if ($('.sj-book').turn('is'))
                            $('.sj-book').turn('page', 1);
                    }
                });

                // Arrows

                $(document).keydown(function(e){

                    var previous = 37, next = 39;

                    switch (e.keyCode) {
                        case previous:

                            $('.sj-book').turn('previous');

                        break;
                        case next:
                            
                            $('.sj-book').turn('next');

                        break;
                    }

                });


                // Flipbook

                flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

                flipbook.turn({
                    elevation: 50,
                    acceleration: !isChrome(),
                    autoCenter: true,
                    gradients: true,
                    duration: 1000,
                    pages: 74,
                    when: {
                        turning: function(e, page, view) {
                            
                            var book = $(this),
                                currentPage = book.turn('page'),
                                pages = book.turn('pages');

                            if (currentPage>3 && currentPage<pages-3) {
                            
                                if (page==1) {
                                    book.turn('page', 2).turn('stop').turn('page', page);
                                    e.preventDefault();
                                    return;
                                } else if (page==pages) {
                                    book.turn('page', pages-1).turn('stop').turn('page', page);
                                    e.preventDefault();
                                    return;
                                }
                            } else if (page>3 && page<pages-3) {
                                if (currentPage==1) {
                                    book.turn('page', 2).turn('stop').turn('page', page);
                                    e.preventDefault();
                                    return;
                                } else if (currentPage==pages) {
                                    book.turn('page', pages-1).turn('stop').turn('page', page);
                                    e.preventDefault();
                                    return;
                                }
                            }

                            updateDepth(book, page);
                            
                            if (page>=2)
                                $('.sj-book .p2').addClass('fixed');
                            else
                                $('.sj-book .p2').removeClass('fixed');

                            if (page<book.turn('pages'))
                                $('.sj-book .p73').addClass('fixed');
                            else
                                $('.sj-book .p73').removeClass('fixed');

                            Hash.go('page/'+page).update();
                                
                        },

                        turned: function(e, page, view) {

                            var book = $(this);

                            if (page==2 || page==3) {
                                book.turn('peel', 'br');
                            }

                            updateDepth(book);
                            
                            $('#slider').slider('value', getViewNumber(book, page));

                            book.turn('center');

                        },

                        start: function(e, pageObj) {
                    
                            moveBar(true);

                        },

                        end: function(e, pageObj) {
                        
                            var book = $(this);

                            updateDepth(book);

                            setTimeout(function() {
                                
                                $('#slider').slider('value', getViewNumber(book));

                            }, 1);

                            moveBar(false);

                        },

                        missing: function (e, pages) {

                            for (var i = 0; i < pages.length; i++) {
                                addPage(pages[i], $(this));
                            }

                        }
                    }
                });


                $('#slider').slider('option', 'max', numberOfViews(flipbook));

                flipbook.addClass('animated');

                // Show canvas

                $('#canvas').css({visibility: ''});
            }

            // Hide canvas

            $('#canvas').css({visibility: 'hidden'});

            // Load turn.js

            yepnope({
                test : Modernizr.csstransforms,
                yep: ['books/js/turn.min.js'],
                nope: ['books/js/turn.html4.min.js', 'books/css/jquery.ui.html4.css', 'books/css/books-html4.css'],
                both: ['books/js/books.js', 'books/css/jquery.ui.css', 'books/css/books.css'],
                complete: loadApp
            });

            </script>
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
        <!--<script src="js/jquery-3.1.0.min.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
    </body>
</html>