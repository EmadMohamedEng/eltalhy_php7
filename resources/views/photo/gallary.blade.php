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
                            <li class="active"><a href="#">الصور</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>الصور</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<!-- photos section -->
<section class="sec-photos pages-body">
    <div class="container">
        <div class="row title">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h2>ألبوم الصور</h2>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 text-left">
                <ul id="portfolio-filter" class="list-unstyled">
                    <li><a class="current" href="#all" title="">الكل</a></li>
                    @foreach($categories as $category)
                        <li><a href="#category_{{$category->id}}" title="" rel="mo7adrat">{{$category->name}}</a></li>
                    @endforeach
                   {{--  <li><a href="#mo7adrat" title="" rel="mo7adrat">محاضرات</a></li>
                    <li><a href="#re7lat" title="" rel="re7lat">رحلات</a></li>
                    <li><a href="#moqablat" title="" rel="moqablat">مقابلات</a></li>
                    <li><a href="#brameg" title="" rel="brameg">برامج</a></li>
                    <li><a href="#kwalees" title="" rel="kwalees">كواليس</a></li>
                    <li><a href="#zyarat" title="" rel="zyarat">زيارات</a></li>
                    <li><a href="#lqa2at" title="" rel="lqa2at">لقاءات</a></li> --}}
                </ul>
            </div>
        </div>
            <ul id="lightGallery" class="gallery list-unstyled">
                @foreach($photos as $photo)
                    <li class="category_{{$photo->category->id}}" data-src="{{url($photo->photo_path)}}"> 
                        <a href="#">
                        <img class="lazy" data-original="{{url($photo->photo_path)}}" />
                        <p>{{$photo->title}}</p>
                        </a> 
                    </li>
                @endforeach
            </ul>	
    </div>
</section>
<!-- //photos section -->


@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('/gallary')}}"]').parent().addClass('active');
</script>
@stop

@stop
