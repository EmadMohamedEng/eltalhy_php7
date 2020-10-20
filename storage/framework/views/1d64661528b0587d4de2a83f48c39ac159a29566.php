<?php $__env->startSection('content'); ?>
<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(img/bg_pages.jpg);">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
                            <li class="active"><a href="#">تَرجَمَةٌ</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>تَرجَمَةٌ</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="about-page pages-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info">
                    <h2 class="text-center">تَرجَمَةٌ</h2>

                    <div class="intro text-center">
                        <p>عن الداعية الإسلامي السيّد أحمد الطلحي حفظه الله</p>

                        <div class="intro-img-profile"><img src="img/profile-intro.jpg" /></div>

                        <p>الحمد لله رب العالمين والصلاة والسلام على فخر الأنبياء و أرحم المرسلين</p>

                        <p>سيّدنا محمّد وعلى آله وصحبه أجمعين...</p>

                        <p>ترجمةُ مختصرة</p>

                        <p>عن الداعي إلى الله الداعية الإسلامي</p>

                        <p>(السيّد أحمد الطلحي حفظه الله )</p>
                    </div>

                    <div class="panel-group" id="accordion">
                        <?php $__empty_1 = true; $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="panel panel-default">
                            <div class="panel-heading hvr-bounce-to-left" id="headingOne">
                                <h4 class="panel-title"><a aria-expanded="false" class="collapsed"
                                        data-parent="#accordion" data-toggle="collapse" href="#<?php echo e($ab->id); ?>"><?php echo e($ab->title); ?>

                                    </a></h4>
                            </div>

                            <div aria-expanded="false" class="panel-collapse collapse" id="<?php echo e($ab->id); ?>"
                                style="height: 0px;">
                                <div class="panel-body"><?php echo $ab->description; ?></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        <div class="panel panel-default">
                            <div class="panel-heading hvr-bounce-to-left" id="headingTen">
                                <h4 class="panel-title"><a aria-expanded="true" data-parent="#accordion"
                                        data-toggle="collapse" href="#collapseTen">شيوخه </a></h4>
                            </div>

                            <div aria-expanded="true" class="panel-collapse collapse in" id="collapseTen">
                                <div class="panel-body">
                                    <!--Teachers -->
                                    <div class="teachers text-center">
                                        <div class="row">

                                            <?php $__empty_1 = true; $__currentLoopData = $mentors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="thumbnail">
                                                    <div class="img-teacher"><img
                                                            alt="<?php echo e($mentor->name); ?>"
                                                            src="<?php echo e(url($mentor->image)); ?>" /></div>

                                                    <div class="caption">
                                                        <h3><?php echo e($mentor->name); ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <!--//Teachers -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php $__env->startSection('scriptActive'); ?>
<script type="text/javascript">
    $('a[href="<?php echo e(url('/aboutus')); ?>"]').parent().addClass('active');
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/about/about.blade.php ENDPATH**/ ?>