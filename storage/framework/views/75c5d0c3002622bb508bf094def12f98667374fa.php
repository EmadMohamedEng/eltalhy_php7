<?php $__env->startSection('content'); ?>
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Slider</h1>
            <h4>Find Slider Options</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo e(url('dashboard')); ?>">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
             <li>
                <i class="fa fa-bars"></i>
                <a href="<?php echo e(url('book')); ?>">Books</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Book</li>
        </ul>
    </div>

    <?php if( Session::has('success') ): ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
     <!-- BEGIN Main Content -->
   <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-file"></i> Book Info</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-9 user-profile-info">
                            <p><span>Book Title:</span><?php echo e($book->title); ?></p>
                            <p><span>Description:</span><?php echo $book->description; ?></p>
                            <p><span>Sections:</span></p>
                            <ul>
                                <?php $__currentLoopData = $book->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($section->title); ?> - <?php echo e($section->page_number); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN Main Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-picture-o"></i> Book content</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <ul class="gallery">
                        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li id="item_<?php echo e($photo->id); ?>" class=<?php echo e(($book->start_cover != $photo->id && $book->end_cover != $photo->id) ? 'sorted':'unsorted'); ?>>
                                <a href="<?php echo e(url($photo->photo_path)); ?>" rel="prettyPhoto" title="<?php echo e($book->title); ?>">
                                    <div>
                                        <img src="<?php echo e(url($photo->photo_path)); ?>" width="230" height="173" alt="" />
                                        <i></i>
                                    </div>
                                </a>
                                <div class="gallery-tools">
                                    <?php if($book->start_cover == $photo->id): ?>
                                        <a href="#">Full Book Cover</a>
                                    <?php elseif($book->end_cover == $photo->id): ?>
                                        <a href="#">Front Book Cover</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(url('book/'.$book->id.'/photo/'.$photo->id.'/cover')); ?>" title = "make Full cover" ><i class="fa fa-link"></i></a>
                                        <a href="<?php echo e(url('book/'.$book->id.'/photo/'.$photo->id.'/indexcover')); ?>" title = "make Front cover" ><i class="fa fa-link"></i></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Main Content -->
    <!-- END Breadcrumb -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customScript'); ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $('#book').addClass('active');
        $('#book-index').addClass('active');
        // $(".gallery").sortable();
        $( ".gallery" ).sortable({
           update: function(event, ui) {
                serial = $('.gallery').sortable('serialize');
                console.log(serial);
                $.ajax({
                    url: "<?php echo e(url('employee/update_sequence')); ?>",
                    type: 'post',
                    data: serial,
                })
                .done(function() {
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });


            },
        });
        $( ".gallery" ).sortable({
            cancel: '.unsorted'
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/book/show.blade.php ENDPATH**/ ?>