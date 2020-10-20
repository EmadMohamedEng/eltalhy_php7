<?php $__env->startSection('content'); ?>
<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(img/bg_pages.jpg);">
  <div class="bg-opacity">
    <div class="container">
      <div class="info">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ol class="breadcrumb">
              <li><a href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
              <li class="active"><a href="#">كتب</a></li>
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
<section class="books_pages pages-body">
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-6 col-md-6">
        <div class="thumbnail">
          <?php $photo = App\BookPhoto::find($book->end_cover); ?>
          <a href="<?php echo e(url('/book_single/'.$book->id)); ?>">
            <img src="<?php echo e(url($photo->photo_path)); ?>" alt="...">
          </a>
          <div class="caption">
            <h3><a href="<?php echo e(url('/book_single/'.$book->id)); ?>">
          <?php echo e($book->title); ?>

          </a></h3>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>
<?php $__env->startSection('scriptActive'); ?>
<script type="text/javascript">
  $('a[href="<?php echo e(url(' / all_books ')); ?>"]').parent().addClass('active');
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/book/books.blade.php ENDPATH**/ ?>