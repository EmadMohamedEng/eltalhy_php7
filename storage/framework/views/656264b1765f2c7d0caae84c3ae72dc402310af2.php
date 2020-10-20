<?php $__env->startSection('content'); ?>
	<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-users"></i>Users </h1>
            <h4>Find Users</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo e(url('panel')); ?>">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Users </li>
        </ul>
    </div>
    <!-- END Breadcrumb -->

    <?php if( Session::has('success') ): ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-black">
	            <div class="box-title">
	                <h3><i class="fa fa-users"></i> Users Table</h3>
	                <div class="box-tool">
	                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
	                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
	                </div>
	            </div>
	            <div class="box-content">
	                <div class="btn-toolbar pull-right">
	                    <div class="btn-group">
	                        <a class="btn btn-circle show-tooltip" title="" onclick = 'return Delete()' href="#" data-original-title="Delete Selected"><i class="fa fa-trash"></i></a>
	                        <a class="btn btn-circle show-tooltip" title="" href="<?php echo e(url('user/new')); ?>" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
	                    </div>
	                </div>
	                <br><br>
					<div class="table-responsive">
						<table class="table table-advance">
						<thead>
							<tr>
								<th style="width:18px"><input type="checkbox" ></th>
								<th>Name</th>
								<th>Email</th>
								<th>Created at</th>
								<th class="visible-md visible-lg" style="width:130px">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr class="table-flag-blue">
								<td id="<?php echo e($user->id); ?>"><input type="checkbox"></td>
								<td><?php echo e($user->name); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td><?php echo e($user->created_at); ?></td>
								<td class="visible-md visible-lg">
								    <div class="btn-group">
										<a class="btn btn-sm show-tooltip" title="" href="<?php echo e(url('user/'.$user->id.'/edit')); ?>" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="<?php echo e(url('user/'.$user->id.'/delete')); ?>" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
								    </div>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
						</table>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script>
	function ConfirmDelete() {
		var x = confirm("Are you sure you want to delete?");
		if (x)
		  return true;
		else
		  return false;
	}

	function Delete() {
		var check = getvalue_func();
		console.log(check);
		var x = confirm("Are you sure you want to delete?");
		if (check != '' && x) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '<?php echo e(url('user/deleteSelected')); ?>',
				type: 'POST',
				data: {items: check},
			})
			.done(function() {
				location.reload();
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		}
		
	}
	function getvalue_func() {
	  return $('tbody input:checked').map(function() {
	    return $(this).parent().attr('id');
	  }).get().join(',');
	}
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('customScript'); ?>
    <script>
        $('#user').addClass('active');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\eltalhy_php7\resources\views/user/index.blade.php ENDPATH**/ ?>