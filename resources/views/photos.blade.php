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
                    <li><a href="#mo7adrat" title="" rel="mo7adrat">محاضرات</a></li>
                    <li><a href="#re7lat" title="" rel="re7lat">رحلات</a></li>
                    <li><a href="#moqablat" title="" rel="moqablat">مقابلات</a></li>
                    <li><a href="#brameg" title="" rel="brameg">برامج</a></li>
                    <li><a href="#kwalees" title="" rel="kwalees">كواليس</a></li>
                    <li><a href="#zyarat" title="" rel="zyarat">زيارات</a></li>
                    <li><a href="#lqa2at" title="" rel="lqa2at">لقاءات</a></li>
                </ul>
            </div>
        </div>
            <ul id="lightGallery" class="gallery list-unstyled">
                <li class="lqa2at mo7adrat" data-src="img/photo1.jpg"> 
                    <a href="#">
                    <img src="img/photo1.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="brameg" data-src="img/photo2.jpg" > 
                    <a href="#">
                    <img src="img/photo2.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="lqa2at" data-src="img/photo3.jpg"> 
                    <a href="#">
                    <img src="img/photo3.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="zyarat" data-src="img/photo4.jpg" > 
                    <a href="#">
                    <img src="img/photo4.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="brameg mo7adrat" data-src="img/photo5.jpg"> 
                    <a href="#">
                    <img src="img/photo5.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="zyarat" data-src="img/photo6.jpg" > 
                    <a href="#">
                    <img src="img/photo6.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="kwalees" data-src="img/photo7.jpg" > 
                    <a href="#">
                    <img src="img/photo7.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="mo7adrat" data-src="img/photo8.jpg"> 
                    <a href="#">
                    <img src="img/photo8.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="kwalees" data-src="img/photo9.jpg" > 
                    <a href="#">
                    <img src="img/photo9.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="moqablat" data-src="img/photo4.jpg" > 
                    <a href="#">
                    <img src="img/photo4.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="re7lat" data-src="img/photo5.jpg"> 
                    <a href="#">
                    <img src="img/photo5.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="mo7adrat" data-src="img/photo6.jpg" > 
                    <a href="#">
                    <img src="img/photo6.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="moqablat" data-src="img/photo7.jpg" > 
                    <a href="#">
                    <img src="img/photo7.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="mo7adrat" data-src="img/photo8.jpg"> 
                    <a href="#">
                    <img src="img/photo8.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li class="re7lat" data-src="img/photo9.jpg" > 
                    <a href="#">
                    <img src="img/photo9.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
            </ul>	
    </div>
</section>
<!-- //photos section -->
@stop
