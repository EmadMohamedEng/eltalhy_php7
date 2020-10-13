@extends('panelLayout')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Careers Table</h1>
            <h4>Find Careers</h4>
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
            <li class="active">Careers Table</li>
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
	                <h3><i class="fa fa-table"></i> Careers Table</h3>
	                <div class="box-tool">
	                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
	                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
	                </div>
	            </div>
	            <div class="box-content">
	                <br><br>
					<div class="table-responsive">
						<table class="table table-advance">
						<thead>
							<tr>
								<th style="width:18px"><input type="checkbox"></th>
								<th>Name</th>
								<th>Job</th>
								<th>Created at</th>
								<th class="visible-md visible-lg" style="width:130px">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($careers as $career)
							<tr class="table-flag-blue">
								<td id="{{$career->id}}"><input type="checkbox"></td>
								<td> <a href="{{url('career/'.$career->id.'/show')}}">{{$career->first_name.' '.$career->last_name}}</a> </td>
								<td>{{$career->job->name}}</td>
								<td>{{$career->created_at}}</td>
								<td class="visible-md visible-lg">
								    <div class="btn-group">
								        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('career/'.$career->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
				url: '{{url('career/deleteSelected')}}',
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