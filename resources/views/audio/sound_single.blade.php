@extends('layout')

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
                            <li><a href="{{url('/sounds')}}">الصوتيات</a></li>
                            <li class="active"><a href="#">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></li>
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
<section class="sound_single pages-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="{{$audio->sound_link}}&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h1>{{$audio->title}}</h1>
                    <?php $date = new Carbon\Carbon($audio->created_at);?>
                    <p class="date">{{$date->toFormattedDateString()}}</p>
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
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                    
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <hr>
        <!-- next posts -->
        <div class="row">
            <div class="col-md-6">
                <div class="same_posts">
                    <div class="same_right pull-right">
                        <a href="/sound_single">
                            <p class="arrows">التالى</p>
                            <p> للسيد أحمد الطلحي 2</p>
                        </a>
                        <i class="fa fa-angle-double-right"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="same_posts">
                    <div class="same_left pull-left">
                        <a href="/sound_single">
                            <p class="arrows">السابق</p>
                            <p> للسيد أحمد الطلحي 3</p>
                        </a>
                        <i class="fa fa-angle-double-left"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>
@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('/sounds')}}"]').parent().addClass('active');
</script>
@stop
@stop 