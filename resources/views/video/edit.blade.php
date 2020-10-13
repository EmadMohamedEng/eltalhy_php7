@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Videos</h1>
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
            <li class="active">Videos</li>
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
                    <h3><i class="fa fa-bars"></i>Video</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('video/'.$video->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Title</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="title" id="title" placeholder="title" value="{{$video->title}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Youtube link</label>
                            <div class="col-sm-9  col-lg-10 controls">
                                <input type="text" name="youtube_link" id="youtube_link" value="{{$video->youtube_link}}" placeholder="youtube link" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-lg-10 col-lg-offset-2 controls" style="width: 30%;">
                                <div class="embed-responsive embed-responsive-4by3" >
                                      <iframe class="embed-responsive-item" width="50%" src="{{$video->youtube_link}}"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 col-lg-2 control-label">Category</label>
                          <div class="col-sm-9 col-lg-10 controls">
                             <select class="form-control chosen" data-placeholder="Choose a Category" tabindex="1" name="category_id">
                                <option value=""> </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{($category->id == $video->category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                             </select>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Description</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <textarea name="description" class="form-control" required>{{$video->description}}</textarea>
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
        $('#video').addClass('active');
        $('#video-new').addClass('active');
        $('#youtube_link').change(function(event) {
            var link = $(this).val();
            $('iframe').attr({
                src: link
            });
        });
    </script>
@endsection

