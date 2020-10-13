@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Audios</h1>
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
            <li class="active">Audios</li>
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
                    <h3><i class="fa fa-bars"></i>Audio</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('audio/'.$audio->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Title</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="title" id="title" placeholder="title" value="{{$audio->title}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">SoundCloud link</label>
                            <div class="col-sm-9  col-lg-10 controls">
                                <input type="text" name="soundcloud_link" id="soundcloud_link" value="{{$audio->sound_link}}" placeholder="youtube link" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-lg-10 col-lg-offset-2 controls" style="width: 30%;">
                                <div class="embed-responsive embed-responsive-4by3" >
                                      <iframe class="embed-responsive-item" width="50%" src="{{$audio->sound_link}}"></iframe>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 col-lg-2 control-label">Album</label>
                          <div class="col-sm-9 col-lg-10 controls">
                             <select class="form-control chosen" data-placeholder="Choose a Category" tabindex="1" name="album_id">
                                <option value=""> </option>
                                @foreach($albums as $album)
                                    <option value="{{$album->id}}" {{($album->id == $audio->album->id) ? 'selected' : ''}}>{{$album->name}}</option>
                                @endforeach
                             </select>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Description</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <textarea name="description" class="form-control" required>{{$audio->description}}</textarea>
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
        $('#audio').addClass('active');
        $('#audio-new').addClass('active');
        $('#soundcloud_link').change(function(event) {
            var link = $(this).val();
            $('iframe').attr({
                src: link
            });
        });
    </script>
@endsection