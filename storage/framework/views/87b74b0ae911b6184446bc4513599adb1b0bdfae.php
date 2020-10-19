<?php $__env->startSection('content'); ?>
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Dashboard</h1>
            <h4>Overview, stats, chat and more</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home</li>
        </ul>
    </div>

    <!-- BEGIN First Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-youtube"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($videos)); ?></p>
                                <p class="title">Videos</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-gears"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($settings)); ?></p>
                                <p class="title">Settings</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-picture-o"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($photos)); ?></p>
                                <p class="title">Photos</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($sliders)); ?></p>
                                <p class="title">Sliders</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-soundcloud"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($audios)); ?></p>
                                <p class="title">Audios</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($categories)); ?></p>
                                <p class="title">Categories</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="content">
                                <p class="big">+<?php echo e(count($books)); ?></p>
                                <p class="title">Books</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END First Row -->
    
    <!-- END Breadcrumb -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('customScript'); ?>
    <script>
        $('#dashboard').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/dashboard/index.blade.php ENDPATH**/ ?>