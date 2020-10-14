@extends('layouts.layout')

@section('content')

<style>
  @media (max-width: 767px) and (min-width: 321px) {
    .videos_pages .thumbnail {
      margin-top: 7%;
    }
  }
</style>

<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(../img/bg_pages.jpg);">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">الرئيسية</a></li>
                            <li><a href="#">الفيديوهات</a></li>
                            <li class="active"><a href="#">برامج</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>برامج</h1>
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
            @foreach($videos as $video)
                <?php $date = new Carbon\Carbon($video->created_at);?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{$video->youtube_link}}"></iframe>
                        </div>
                        <div class="caption">
                            <h3><a href="{{ url('/video/'.$video->slug)}}">{{$video->title}}</a></h3>
                            <p class="date">{{$date->toFormattedDateString()}} </p>
                            <p>{{substr($video->description, 0,120)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="pages_numbers">
                {!! $videos->render() !!}
            </div>
        </div>
    </div>
</section>
@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('#')}}"]').parent().addClass('active');
</script>
@stop
@stop
