<?php $__env->startSection('style'); ?>
<!-- <link href="<?php echo e(url('js/book/jquery.booklet.latest.css')); ?>" rel="stylesheet"> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $cover = App\BookPhoto::find($book->start_cover);?>
<style>
.sample-docs .hard {
  background-image:url('<?php echo e(url($cover->photo_path)); ?>') !important;

}

</style>
<style>
body {
    overflow-y: scroll !important;
    background-image: unset !important;

}
.social_icon {
  display: none;
}

.pdf_download {
    text-align: center;
    font-size: 1.75rem;
}

.pdf_download img {
    width: 80%;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

.pdf_download a {
    width: 60%;
    display: block;
    margin: 2% auto;
    padding: 8px 0;
    background: #766141;
    border-top-left-radius: 70px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 70px;
    border-bottom-left-radius: 10px;
}
#canvas{
  margin: 168px auto !important;
}
@media (min-width: 320px) and (max-width: 1025px) {
    #canvas {
        display: none;
    }

    .navbar-fixed-bottom,
    .navbar-fixed-top {
        position: unset;
    }

    /* footer {
    position: fixed;
    bottom: 0;
    width: 100%;
  } */
}

@media (min-width: 1025px) {
    .pdf_download {
        display: none;
    }
}
</style>


<div id="canvas">
    <div id="book-zoom">
        <div class="sample-docs">
            <!-- <div ignore="1" class="tabs">
        <div class="left"> </div>
        <div class="right"> </div>
      </div> -->
            <div class="hard"></div>
            <div class="hard"></div>
            <div class="hard p29"></div>
            <div class="hard p30"></div>
        </div>
    </div>


    <div id="slider-bar" class="turnjs-slider">
        <div id="slider"></div>
    </div>
</div>

<div class="pdf_download">
    <img src="../img/book_1.jpg" alt="">
    <a href="<?php echo e(url('book/'.$book->id.'/download')); ?>">تحميل الكتاب <i class="fa fa-book" aria-hidden="true"></i></a>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scriptActive'); ?>
<script src="<?php echo e(url('book_plugin/docs/js/jquery.min.1.7.js')); ?>"></script>
<script src="<?php echo e(url('book_plugin/docs/js/jquery-ui-1.8.20.custom.min.js')); ?>"></script>
<script src="<?php echo e(url('book_plugin/docs/js/jquery.mousewheel.min.js')); ?>"></script>
<script src="<?php echo e(url('book_plugin/docs/js/modernizr.2.5.3.min.js')); ?>"></script>
<script src="<?php echo e(url('book_plugin/docs/js/hash.js')); ?>"></script>

<script type="text/javascript">
function loadApp() {

    var flipbook = $('.sample-docs');

    // Check if the CSS was already loaded

    if (flipbook.width() == 0 || flipbook.height() == 0) {
        setTimeout(loadApp, 10);
        return;
    }

    // Mousewheel

    $('#book-zoom').mousewheel(function(event, delta, deltaX, deltaY) {

        var data = $(this).data(),
            step = 0,
            flipbook = $('.sample-docs'),
            actualPos = $('#slider').slider('value') * step;

        if (typeof(data.scrollX) === 'undefined') {
            data.scrollX = actualPos;
            data.scrollPage = flipbook.turn('page');
        }

        data.scrollX = Math.min($("#slider").slider('option', 'max') * step,
            Math.max(0, data.scrollX + deltaX));

        var actualView = Math.round(data.scrollX / step),
            page = Math.min(flipbook.turn('pages'), Math.max(1, actualView * 2 - 2));

        if ($.inArray(data.scrollPage, flipbook.turn('view', page)) == -1) {
            data.scrollPage = page;
            flipbook.turn('page', page);
        }

        if (data.scrollTimer)
            clearInterval(data.scrollTimer);

        data.scrollTimer = setTimeout(function() {
            data.scrollX = undefined;
            data.scrollPage = undefined;
            data.scrollTimer = undefined;
        }, 1000);

    });

    // Slider

    $("#slider").slider({
        min: 1,
        max: 100,

        start: function(event, ui) {
            if (!window._thumbPreview) {
                _thumbPreview = $('<div />', {
                    'class': 'thumbnail'
                }).html('<div></div>');
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

            $('.sample-docs').turn('page', Math.max(1, $(this).slider('value') * 2 - 2));
        }
    });


    // URIs

    Hash.on('^page\/([0-9]*)$', {
        yep: function(path, parts) {
            var page = parts[1];

            if (page !== undefined) {
                if ($('.sample-docs').turn('is'))
                    $('.sample-docs').turn('page', page);
            }

        },
        nop: function(path) {

            if ($('.sample-docs').turn('is'))
                $('.sample-docs').turn('page', 1);
        }
    });

    // Arrows

    $(document).keydown(function(e) {

        var previous = 37,
            next = 39;

        switch (e.keyCode) {
            case previous:

                $('.sample-docs').turn('previous');

                break;
            case next:

                $('.sample-docs').turn('next');

                break;
        }

    });

    // Create the flipbook

    flipbook.turn({
        elevation: 50,
        acceleration: true,
        gradients: true,
        autoCenter: true,
        duration: 1000,
        pages: <?php echo e($photos_order->order -1); ?>,
        direction: "rtl",
        when: {

            turning: function(e, page, view) {

                var book = $(this),
                    currentPage = book.turn('page'),
                    pages = book.turn('pages');

                if (currentPage > 3 && currentPage < pages - 3) {
                    if (page == 1) {
                        book.turn('page', 2).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    } else if (page == pages) {
                        book.turn('page', pages - 1).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    }
                } else if (page > 3 && page < pages - 3) {
                    if (currentPage == 1) {
                        book.turn('page', 2).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    } else if (currentPage == pages) {
                        book.turn('page', pages - 1).turn('stop').turn('page', page);
                        e.preventDefault();
                        return;
                    }
                }

                Hash.go('page/' + page).update();

                if (page == 1 || page == pages)
                    $('.sample-docs .tabs').hide();


            },

            turned: function(e, page, view) {

                var book = $(this);

                $('#slider').slider('value', getViewNumber(book, page));

                if (page != 1 && page != book.turn('pages'))
                    $('.sample-docs .tabs').fadeIn(500);
                else
                    $('.sample-docs .tabs').hide();

                book.turn('center');
                updateTabs();

            },

            start: function(e, pageObj) {

                moveBar(true);

            },

            end: function(e, pageObj) {

                var book = $(this);

                setTimeout(function() {
                    $('#slider').slider('value', getViewNumber(book));
                }, 1);

                moveBar(false);

            },

            missing: function(e, pages) {

                for (var i = 0; i < pages.length; i++)
                    addPage(pages[i], $(this));

            }
        }
    }).turn('page', 2);



    $('#slider').slider('option', 'max', numberOfViews(flipbook));

    flipbook.addClass('animated');


    // Show canvas

    $('#canvas').css({
        visibility: 'visible'
    });
}

function loadPage(page) {
        var img = $('<img />');
        img.load(function() {
            var container = $('.sample-docs .p' + page);
            img.css({
                width: container.width(),
                height: container.height()
            });
            img.appendTo($('.sample-docs .p' + page));
            container.find('.loader').remove();
        });
        $.ajax({
        url: "<?php echo e(url('book/'.$book->id.'/loadpage')); ?>/" + page
    }).done(function(pageHtml) {
        console.log(pageHtml);
        img.attr('src', '../' +pageHtml['path']);
    });
}

function addPage(page, book) {

var id, pages = book.turn('pages');

var element = $('<div />', {});

if (book.turn('addPage', element, page)) {
  if (page<<?php echo e($photos_order->order); ?>) {
    element.html('<div class="gradient"></div><div class="loader"></div>');
    loadPage(page);
  }
}
}

$('#canvas').css({
    visibility: 'hidden'
});

yepnope({
    test: Modernizr.csstransforms,
    yep: ['../book_plugin/docs/js/turn.min.js', '../book_plugin/docs/css/jquery.ui.css'],
    nope: ['../book_plugin/docs/js/turn.html4.min.js', '../book_plugin/docs/css/jquery.ui.html4.css'],
    both: ['../book_plugin/docs/css/docs.css', '../book_plugin/docs/js/docs.js'],
    complete: loadApp
});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/book/book_single.blade.php ENDPATH**/ ?>