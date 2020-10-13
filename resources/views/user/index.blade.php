@extends('layouts.main')
@section('content')
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
                <a href="{{url('panel')}}">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Users </li>
        </ul>
    </div>
    <!-- END Breadcrumb -->

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{ Session::get('success')}}
        </div>
    @endif
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
	                        <a class="btn btn-circle show-tooltip" title="" href="{{url('user/new')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
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
						@foreach($users as $user)
							<tr class="table-flag-blue">
								<td id="{{$user->id}}"><input type="checkbox"></td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->created_at}}</td>
								<td class="visible-md visible-lg">
								    <div class="btn-group">
										<a class="btn btn-sm show-tooltip" title="" href="{{url('user/'.$user->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('user/'.$user->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
								    </div>
								</td>
							</tr>
						@endforeach
						</tbody>
						</table>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
				url: '{{url('user/deleteSelected')}}',
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
@stop
@section('customScript')
    <script>
        $('#user').addClass('active');
    </script>
@endsection