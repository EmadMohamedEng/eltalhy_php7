<?php $__env->startSection('content'); ?>
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Books</h1>
        </div>
    </div>
    <!-- END Page Title -->

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-content">
                <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>File System</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo e(url('elFinder/elfinder')); ?>"></iframe>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/dashboard/file_manager.blade.php ENDPATH**/ ?>