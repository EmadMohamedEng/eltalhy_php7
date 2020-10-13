@extends('panelLayout')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Employees Table</h1>
            <h4>Find Employee</h4>
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
            <li class="active">Employees Table</li>
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
	                <h3><i class="fa fa-table"></i> Employees Table</h3>
	                <div class="box-tool">
	                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
	                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
	                </div>
	            </div>
	            <div class="box-content">
	                <div class="btn-toolbar pull-right">
	                    <div class="btn-group">
	                        <a class="btn btn-circle show-tooltip" title="" onclick = 'return Delete()' href="#" data-original-title="Delete Selected"><i class="fa fa-trash"></i></a>
	                        <a class="btn btn-circle show-tooltip" title="" href="{{url('employee/new')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
	                    </div>
	                </div>
	                <br><br>
					<div class="table-responsive">
						<table class="table table-advance">
						<thead>
							<tr>
								<th style="width:18px"><input type="checkbox"></th>
								<th>Name</th>
								<th>Linkedin</th>
								<th>Facebook</th>
								<th>Job</th>
								<th>Created at</th>
								<th class="visible-md visible-lg" style="width:130px">Action</th>
							</tr>
						</thead>
						<tbody class="gallery1">
						@foreach($employees as $employee)
							<tr id="item_{{$employee->id}}" class="table-flag-blue">
								<td id="{{$employee->id}}"><input type="checkbox"></td>
								<td>{{$employee->name}}</td>
								<td>{{$employee->linkedin_link}}</td>
								<td>{{$employee->facebook_link}}</td>
								<td>{{$employee->job->name}}</td>
								<td>{{$employee->created_at}}</td>
								<td class="visible-md visible-lg">
								    <div class="btn-group">
										<a class="btn btn-sm show-tooltip" title="" href="{{url('employee/'.$employee->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
								        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('employee/'.$employee->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
			$.ajax({
				url: '{{url('employee/deleteSelected')}}',
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

@section('contentScript')
	{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	        // $(".gallery").sortable();
	        $( ".gallery1" ).sortable({
	           update: function(event, ui) {
	                serial = $('.gallery1').sortable('serialize');
	                console.log(serial);
	                $.ajax({
	                    url: "{{url('employee/update_sequence')}}",
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
	        $( ".gallery1" ).sortable({
	            cancel: '.unsorted' 
	        });

	    </script>

@endsection