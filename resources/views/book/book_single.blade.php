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
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{url('css/animate.css')}}" rel="stylesheet">
        <link href="{{url('css/hover-min.css')}}" rel="stylesheet">
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <![endif]-->
        <?php $cover = App\BookPhoto::find($book->start_cover);?>
        <style>
            .sj-book .p1,
            .sj-book .p2,
            .sj-book .p3,
            .sj-book .p73,
            .sj-book .p74{
                background-color:white;
                background-image:url({{url($cover->photo_path)}}) !important;
            }
        </style>
        <!-- js for books -->
        <script type="text/javascript" src="{{url('books/js/jquery.min.1.7.js')}}"></script>
        <script type="text/javascript" src="{{url('books/js/jquery-ui-1.8.20.custom.min.js')}}"></script>
        <script type="text/javascript" src="{{url('books/js/jquery.mousewheel.min.js')}}"></script>
        <script type="text/javascript" src="{{url('books/js/modernizr.2.5.3.min.js')}}"></script>
        <script type="text/javascript" src="{{url('books/js/hash.js')}}"></script>
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
              <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('/')."/".Helper::get_setting_by_key('website_logo')}}" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="{{ url('/')}}">الرئيسية <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('/aboutus')}}">السيرة الذاتية</a></li>
                <li><a href="{{ url('/gallary')}}">صور</a></li>
                <li><a href="{{ url('/sounds')}}">صوتيات</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">فيديوهات <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('/videos/برامج')}}">برامج</a></li>
                    <li><a href="{{ url('/videos/مقابلات')}}">مقابلات تلفزيونية</a></li>
                  </ul>
                </li>

                  <li><a href="{{ url('/messages')}}">وما أبرئ نفسي</a></li>
                  <li><a href="{{ url('/contactus')}}">أتصل بنا</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <!--Start Contant-->
        <!-- clear section -->
        <section class="clear_sec in_pages" style="background-image: url(../img/bg_pages.jpg);">
            <div class="bg-opacity">
                <div class="container">
                    <div class="info">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ol class="breadcrumb">
                                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                                    <li><a href="{{url('all_books')}}">كتب</a></li>
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
                            {{-- @foreach($photos as $photo)
                                @if($photo->id != $book->start_cover)
                                    <div class="own-size">
                                        <img style="width: 100%;height: 100%;" src="{{url($photo->photo_path)}}">
                                    </div>
                                @endif
                            @endforeach --}}
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
                    <object data="{{str_replace('\\','/',($book->photo_path))}}" type="application/pdf" width="100%" height="100%">
                        <p>Alternative text - include a link <a href="{{url('book/'.$book->id.'/download')}}">to the PDF!</a></p>
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
                yep: ['{{url('books/js/turn.min.js')}}'],
                nope: ['{{url('books/js/turn.html4.min.js')}}', '{{url('books/css/jquery.ui.html4.css')}}', '{{url('books/css/books-html4.css')}}'],
                both: [ '{{url('books/css/jquery.ui.css')}}', '{{url('books/css/books.css')}}'],
                complete: loadApp
            });

                        /* Steve jobs' book */

            function updateDepth(book, newPage) {

                var page = book.turn('page'),
                    pages = book.turn('pages'),
                    depthWidth = 16*Math.min(1, page*2/pages);

                    newPage = newPage || page;

                if (newPage>3)
                    $('.sj-book .p2 .depth').css({
                        width: depthWidth,
                        left: 20 - depthWidth
                    });
                else
                    $('.sj-book .p2 .depth').css({width: 0});

                    depthWidth = 16*Math.min(1, (pages-page)*2/pages);

                if (newPage<pages-3)
                    $('.sj-book .p111 .depth').css({
                        width: depthWidth,
                        right: 20 - depthWidth
                    });
                else
                    $('.sj-book .p111 .depth').css({width: 0});

            }

            function loadPage(page) {
                console.log();
                $.ajax({url: "{{url('book/'.$book->id.'/loadpage')}}/"+page }).
                    done(function(pageHtml) {
                        console.log(pageHtml);
                        var html = `<div class="book-content">
                                        <p class="center-pic">
                                            <img src="{{url("/")."/"}}${pageHtml['path']}">
                                        </p>
                                        </div>`;
                        $('.sj-book .p' + page).html(html);
                    });

            }

            function addPage(page, book) {

                var id, pages = book.turn('pages');

                if (!book.turn('hasPage', page)) {

                    var element = $('<div />',
                        {'class': 'own-size',
                            css: {width: 460, height: 582}
                        }).
                        html('<div class="loader"></div>');

                    if (book.turn('addPage', element, page)) {
                        loadPage(page);
                    }

                }
            }

            function numberOfViews(book) {

                return book.turn('pages') / 2 + 1;

            }

            function getViewNumber(book, page) {

                return parseInt((page || book.turn('page'))/2 + 1, 10);

            }

            function zoomHandle(e) {

                if ($('.sj-book').data().zoomIn)
                    zoomOut();
                else if (e.target && $(e.target).hasClass('zoom-this')) {
                    zoomThis($(e.target));
                }

            }

            function zoomThis(pic) {

                var position, translate,
                    tmpContainer = $('<div />', {'class': 'zoom-pic'}),
                    transitionEnd = $.cssTransitionEnd(),
                    tmpPic = $('<img />'),
                    zCenterX = $('#book-zoom').width()/2,
                    zCenterY = $('#book-zoom').height()/2,
                    bookPos = $('#book-zoom').offset(),
                    picPos = {
                        left: pic.offset().left - bookPos.left,
                        top: pic.offset().top - bookPos.top
                    },
                    completeTransition = function() {
                        $('#book-zoom').unbind(transitionEnd);

                        if ($('.sj-book').data().zoomIn) {
                            tmpContainer.appendTo($('body'));

                            $('body').css({'overflow': 'hidden'});

                            tmpPic.css({
                                margin: position.top + 'px ' + position.left+'px'
                            }).
                            appendTo(tmpContainer).
                            fadeOut(0).
                            fadeIn(500);
                        }
                    };

                    $('.sj-book').data().zoomIn = true;

                    $('.sj-book').turn('disable', true);

                    $(window).resize(zoomOut);

                    tmpContainer.click(zoomOut);

                    tmpPic.load(function() {
                        var realWidth = $(this)[0].width,
                            realHeight = $(this)[0].height,
                            zoomFactor = realWidth/pic.width(),
                            picPosition = {
                                top:  (picPos.top - zCenterY)*zoomFactor + zCenterY + bookPos.top,
                                left: (picPos.left - zCenterX)*zoomFactor + zCenterX + bookPos.left
                            };


                        position = {
                            top: ($(window).height()-realHeight)/2,
                            left: ($(window).width()-realWidth)/2
                        };

                        translate = {
                            top: position.top-picPosition.top,
                            left: position.left-picPosition.left
                        };

                        $('.samples .bar').css({visibility: 'hidden'});
                        $('#slider-bar').hide();


                        $('#book-zoom').transform(
                            'translate('+translate.left+'px, '+translate.top+'px)' +
                            'scale('+zoomFactor+', '+zoomFactor+')');

                        if (transitionEnd)
                            $('#book-zoom').bind(transitionEnd, completeTransition);
                        else
                            setTimeout(completeTransition, 1000);

                    });

                    tmpPic.attr('src', pic.attr('src'));

            }

            function zoomOut() {

                var transitionEnd = $.cssTransitionEnd(),
                    completeTransition = function(e) {
                        $('#book-zoom').unbind(transitionEnd);
                        $('.sj-book').turn('disable', false);
                        $('body').css({'overflow': 'auto'});
                        moveBar(false);
                    };

                $('.sj-book').data().zoomIn = false;

                $(window).unbind('resize', zoomOut);

                moveBar(true);

                $('.zoom-pic').remove();
                $('#book-zoom').transform('scale(1, 1)');
                $('.samples .bar').css({visibility: 'visible'});
                $('#slider-bar').show();

                if (transitionEnd)
                    $('#book-zoom').bind(transitionEnd, completeTransition);
                else
                    setTimeout(completeTransition, 1000);
            }


            function moveBar(yes) {
                if (Modernizr && Modernizr.csstransforms) {
                    $('#slider .ui-slider-handle').css({zIndex: yes ? -1 : 10000});
                }
            }

            function setPreview(view) {

                var previewWidth = 115,
                    previewHeight = 73,
                    previewSrc = 'pages/preview.jpg',
                    preview = $(_thumbPreview.children(':first')),
                    numPages = (view==1 || view==$('#slider').slider('option', 'max')) ? 1 : 2,
                    width = (numPages==1) ? previewWidth/2 : previewWidth;

                _thumbPreview.
                    addClass('no-transition').
                    css({width: width + 15,
                        height: previewHeight + 15,
                        top: -previewHeight - 30,
                        left: ($($('#slider').children(':first')).width() - width - 15)/2
                    });

                preview.css({
                    width: width,
                    height: previewHeight
                });

                if (preview.css('background-image')==='' ||
                    preview.css('background-image')=='none') {

                    preview.css({backgroundImage: 'url(' + previewSrc + ')'});

                    setTimeout(function(){
                        _thumbPreview.removeClass('no-transition');
                    }, 0);

                }

                preview.css({backgroundPosition:
                    '0px -'+((view-1)*previewHeight)+'px'
                });
            }

            function isChrome() {

                // Chrome's unsolved bug
                // http://code.google.com/p/chromium/issues/detail?id=128488

                return navigator.userAgent.indexOf('Chrome')!=-1;

            }
            </script>
        <!--//End Contant-->
        <!--Footer Section -->
       <footer style="background-image: url(http://localhost/eltalhy/img/bg_footer.jpg);">
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
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/wow.min.js')}}"></script>
        <script src="{{url('js/plugins.js')}}"></script>
    </body>
</html>
