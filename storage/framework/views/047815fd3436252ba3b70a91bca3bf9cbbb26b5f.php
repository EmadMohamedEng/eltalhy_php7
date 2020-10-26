<?php $__env->startSection('content'); ?>

<!-- Modal -->



<!--Hero slider-->
<div class="hero-slider">



        <div class="item">
            <div class="container">
                <div class="info">
              <!-- <h2 class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s">لسيد <span>أحمد الطلحي</span></h2>
                    <p class="wow fadeInUp" data-wow-duration="4s" data-wow-delay="2s">اهد مقابلات السيد أحمد الطلحي وبرامجة التلفزيونية.</p> -->
                    <img src="img/Group 8.png" class="slide_center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"/>
                    <img src="img/Layer 5.png" class="slide_left wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"/>
                    <!-- <a href="<?php echo e(url('aboutus')); ?>">المزيد</a> -->
                 <!--     -->
                </div>
                <div class="img-slider">
                    <img src="uploads/slider/1492464284_slide_3.png" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"/>
                </div>
            </div>
        </div>

            <div class="item" style="background: linear-gradient(rgba(255, 255, 255, 0.38), #ab722b), url(img/bg_slider.jpg)">
            <div class="container">
                <div class="info">
                    <h2 class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s">الموقع الرسمي للسيد <span>أحمد الطلحي</span></h2>
                    <p class="wow fadeInUp" data-wow-duration="4s" data-wow-delay="2s">هو السيّد:  أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء ψ بنت سيّدنا محمّد خاتم النبيين </p>
                    <a href="#">المزيد</a>
                                    </div>
                <div class="img-slider">
                    <img src="uploads/slider/1492464284_slide_3.png" class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s"/>
                </div>
            </div>
    </div>
</div>
<!--//Hero slider-->

<!-- clear section -->
<section class="clear_sec" style="background-image: url(img/2.jpg);">
    <div class="bg-opacity"></div>
</section>
<!-- //clear section -->

<!-- About section -->
<section class="about_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
            <h2>السيرة الذاتية<img src="<?php echo e(url('img/tepo4.png')); ?>" /></h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="middle-img wow fadeInUp hvr-float" data-wow-duration="2s" data-wow-delay=".6s">
                    <img class="img-responsive" src="<?php echo e(url($about->photo_path)); ?>" >
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <p><?php echo e($about->description); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- //About section -->

<!-- newslatter section -->
<section class="newslatter" id="newsletter">
    <div class="container" >
        <div class="row">
            <div class="col-md-2 col-sm-1 col-xs-4"><i class="fa fa-send"></i></div>
            <div class="col-md-4 col-sm-3 col-xs-8">
            <p>إشترك ليصلك جديد <img src="<?php echo e(url('img/tepo3.png')); ?>" /></p>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <form class="form-inline" id="subscribeFrom" method="post"  action="" >
                    <?php echo e(csrf_field()); ?>

                  <div class="form-group<?php echo e($errors->has('contact_email')? ' has-error':''); ?>">
                    <label for="exampleInputEmail2">البريد الالكتروني</label>
                    <input type="email" class="form-control" name="contact_email" value="<?php echo e(old('contact_email')); ?>" id="exampleInputEmail2" placeholder="example@example.com" required>
                  </div>
                  <button type="submit" class="btn btn-default" >إرسال</button>
                  <span class="help-block ">
                    <strong class="text-success" style="margin-right: 100px;"></strong>
                </span>

                    
                </form>
            </div>
        </div>
    </div>
</section>
<!-- //newslatter section -->

<!-- books section -->
<section class="sec-books">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="middle-img">
                    <?php $photo = App\BookPhoto::find($book->end_cover);?>
                    <a href="<?php echo e(url('/book_single/'.$book->id)); ?>"><img class="img-responsive" src="<?php echo e(url($photo->photo_path)); ?>" alt="..." ></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <h3>أحدث إصدارات <img src="<?php echo e(url('img/tepo3.png')); ?>" /></h3>
                <p class="title"><?php echo e($book->title); ?>:</p>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $book->sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><p><i class="fa fa-moon-o"></i><?php echo e($section->title); ?></p></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="more-books">
                <a href="<?php echo e(url('/all_books')); ?>">شاهد جميع الأصدارات</a>
            </div>
        </div>
    </div>
</section>
<!-- //books section -->

<!-- photos section -->
<section class="sec-photos">
    <div class="container">
        <div class="row title">
            <div class="col-xs-6">
                <h2>ألبوم الصور</h2>
            </div>
            <div class="col-xs-6 text-left">
                <a href="<?php echo e(url('gallary')); ?>">شاهد الكل</a>
            </div>
        </div>
            <ul id="lightGallery" class="gallery list-unstyled">
                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-src="<?php echo e(url($photo->photo_path)); ?>" >
                        <a href="#">
                        <img src="<?php echo e(url($photo->photo_path)); ?>" />
                        <p><?php echo e($photo->title); ?></p>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
    </div>
</section>
<!-- //photos section -->

<!-- ring back tone section -->
<section class="sec-rbt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
             <h2>إشترك فى خدمة الرسائل النصية <img src="<?php echo e(url('img/tepo4.png')); ?>" /></h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <p>تابع كل جديد من خلال الرسائل النصية.</p>
                <a href="javascript:modal()" id="subscribeSMS">إشترك الان</a>
            </div>
        </div>
    </div>
</section>
<!-- //ring back tone section -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" id="commingSoon" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

      <H1 style="text-align: center;">قريبا</H1>
      </div>
    </div>
  </div>
</div>
<?php $__env->startSection('scriptActive'); ?>
<script type="text/javascript">
   $('a[href="<?php echo e(url('/')); ?>"]').parent().addClass('active');
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>















<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/main_view/welcome.blade.php ENDPATH**/ ?>