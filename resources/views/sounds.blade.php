@extends('layout')

@section('content')
<!-- clear section -->
<section class="clear_sec in_pages">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
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
<section class="sounds_pages pages-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="item text-center">
                    <iframe style="width:100%" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217226961&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <h2><a href="{{ url('/sound_single')}}">مثال لعنوان مقطع صوتى للسيد أحمد الطلحي</a></h2>
                    <p class="date">5 أبريل 2017</p>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="pages_numbers">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@stop 