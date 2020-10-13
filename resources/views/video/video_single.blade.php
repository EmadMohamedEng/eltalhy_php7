@extends('layouts.layout')

@section('content')
<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(../img/bg_pages.jpg);">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">الرئيسية</a></li>
                            <li><a href="{{url('/videos/'.$video->category->name)}}">{{$video->category->name}}</a></li>
                            <li class="active"><a href="#">{{$video->title}}</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>الفيديوهات</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<section class="video_single pages-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item text-center">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{$video->youtube_link}}?rel=0&amp;showinfo=0"></iframe>
                    </div>
                    <h1>{{$video->title}}</h1>
                    <?php $date = new Carbon\Carbon($video->created_at);?>
                    <p class="date">{{$date->toFormattedDateString()}}</a></p>
                    <hr>
                </div>
            </div>
        </div>
        <!-- Share post -->
        <div class="row share-post">
            <div class="col-md-6">
                <div class="pull-right">
                    المشاركة
                </div>
            </div>
            <div class="col-md-6">
                <div class="pull-left">
                    <ul class="list-unstyled">                  
                        <li><a href="{{'https://twitter.com/intent/tweet?url='.url('video/'.$video->slug)}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{'https://www.facebook.com/sharer/sharer.php?u='.url('video/'.$video->slug)}}"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <hr>
        <!-- next posts -->
        <div class="row">
            @if($next != null)
                <div class="col-md-6">
                    <div class="same_posts">
                        <div class="same_right pull-right">
                            <a href="{{url('video/'.App\Video::find($next)->slug)}}">
                                <p class="arrows">التالى</p>
                                <p>{{App\Video::find($next)->title}}</p>
                            </a>
                            <i class="fa fa-angle-double-right"></i>
                        </div>
                    </div>
                </div>
            @endif
            @if($previous != null)
                <div class="col-md-6">
                    <div class="same_posts">
                        <div class="same_left pull-left">
                            <a href="{{url('video/'.App\Video::find($previous)->slug)}}">
                                <p class="arrows">السابق</p>
                                <p>{{App\Video::find($previous)->title}}</p>
                            </a>
                            <i class="fa fa-angle-double-left"></i>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <hr>
    </div>
</section>
@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('#')}}"]').parent().addClass('active');
</script>
@stop
@stop 