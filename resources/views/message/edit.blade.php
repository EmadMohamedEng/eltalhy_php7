@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Messages</h1>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('dashboard')}}">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Messages</li>
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
                    <h3><i class="fa fa-bars"></i>Message</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('message/'.$message->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Title</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="title" id="title" value="{{$message->title}}" placeholder="title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Message</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <textarea name="message" class="form-control" required>{{$message->message}}</textarea>
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

@section('customScript')
    <script>
        $('#message').addClass('active');
        $('#message-new').addClass('active');
    </script>
@endsection