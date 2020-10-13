@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Albums</h1>
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
            <li class="active">Albums</li>
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
                    <h3><i class="fa fa-bars"></i>Album</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('album')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Name</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="name" id="name" placeholder="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
                          <div class="col-sm-9 col-lg-10 controls">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                   <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                   <span class="btn btn-default btn-file">
                                        <span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" class="file-input" name="image" required />
                                    </span>
                                   <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                             </div>
                             <span class="label label-important">NOTE!</span>
                             <span>Attached image img-thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</span>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Description</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                {{-- <input type="text" name="link" id="link" placeholder="link" class="form-control" required> --}}
                                <textarea name="description" class="form-control" required></textarea>
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
        $('#album').addClass('active');
        $('#album-new').addClass('active');
    </script>
@endsection