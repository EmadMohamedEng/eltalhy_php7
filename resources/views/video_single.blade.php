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
                            <li><a href="/">الرئيسية</a></li>
                            <li><a href="/videos">الفيديوهات</a></li>
                            <li><a href="/videos">مقابلات تلفزيونية</a></li>
                            <li class="active"><a href="#">مثال لعنوان فيديو للسيد أحمد الطلحى</a></li>
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
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YX7Fx8rHhps?rel=0&amp;showinfo=0"></iframe>
                    </div>
                    <h1>مثال لعنوان فيديو للسيد أحمد الطلحى</h1>
                    <p class="date">5 أبريل 2017 - <a href="/videos">برامج</a></p>
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
                        <a href="/video_single">
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
                        <a href="/video_single">
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

@stop 