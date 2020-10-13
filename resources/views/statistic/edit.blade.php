@extends('panelLayout')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>update Statistic</h1>
            <h4>update Statistic</h4>
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
            <li class="active">Statistic</li>
        </ul>
    </div>
     @if (count($errors) > 0)
	    <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

    @if ( Session::has('failed') )
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>failed!</strong> {{ Session::get('failed')}}
        </div>
    @endif
    <!-- END Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Create Statistic</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('statistic/'.$statistic->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
              			{!! csrf_field() !!}
                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Title*</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="title" id="title" value="{{$statistic->title}}" placeholder="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Icon*</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="icon" id="icon" value="{{$statistic->icon}}" placeholder="icon" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Number</label>
                            <div class="col-sm-9 col-lg-10 controls">
                             <input type="number" name="number" value="{{$statistic->number}}" class="form-control" required>
                            </div>
                        </div>
                       
                        <div class="form-group last">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                               <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Delete() {
        var check = getvalue_func();
        console.log(check);
        var x = confirm("Are you sure you want to delete?");
        if (check != '' && x) {
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