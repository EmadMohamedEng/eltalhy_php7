@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-user"></i>Edit user</h1>
            <h4>edit user</h4>
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
            <li class="active">Edit user</li>
        </ul>
    </div>
     @if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    <!-- END Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-user"></i> Edit User</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('user/'.$user->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped">
              			{!! csrf_field() !!}
                        <input type="hidden" name="_method" value="PATCH">
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Name</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Email</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="email" name="email" id="email" value="{{$user->email}}" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password5" class="col-sm-3 col-lg-2 control-label">Password</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="password" name="password" id="password5" placeholder="Password input" class="form-control" autocomplete="new-password" nofill>
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
@stop
@section('contentScript')
    <script>
        $('#password5').val('');
    </script>
@endsection
@section('customScript')
    <script>
        $('#user').addClass('active');
    </script>
@endsection