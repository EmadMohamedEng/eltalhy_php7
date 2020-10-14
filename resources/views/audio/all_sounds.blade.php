@extends('layouts.layout')

@section('content')
<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(img/bg_pages.jpg);">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">الرئيسية</a></li>
                            <li class="active"><a href="#">الصوتيات</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>الصوتيات</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<section class="videos_pages pages-body">
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="sounds_img">
                            <img class="img-responsive" src="{{url($album->image)}}" alt="برنامج تبسم">
                        </div>
                        <div class="caption">
                            <h3><a href="{{ url('/sounds/'.$album->id.'/album')}}">{{$album->name}}</a></h3>
                            <p>{{$album->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('/sounds')}}"]').parent().addClass('active');
</script>
@stop
@stop
