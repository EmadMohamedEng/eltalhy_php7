@extends('layout')

@section('content')

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" src="img/talhi.mp4" autoplay></video>
        </div>
    </div>
  </div>
</div>


<!--Hero slider-->
<div class="hero-slider">
    <div class="item">
        <div class="container">
            <div class="info">
                <h2 class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s">الموقع الرسمي للسيد <span>أحمد الطلحي</span></h2>
                <p class="wow fadeInUp" data-wow-duration="4s" data-wow-delay="2s">يقول عنه أتباعه ومُحِبُّوه إنه نموذج للشاب الذي نشأ في طاعة الله ومرضاة نبيه، وطالب العلم الذي لا تحول المسافات والعوائق بينه وبين بُغْيَتِه.</p>
                <a href="#">المزيد</a>
            </div>
            <div class="img-slider">
                <img src="img/slide_3.png" class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s"/>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
            <div class="info">
                <h2 class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s">مقابلات السيد <span>أحمد الطلحي</span></h2>
                <p class="wow fadeInUp" data-wow-duration="4s" data-wow-delay="2s">شاهد مقابلات السيد أحمد الطلحي وبرامجة التلفزيونية.</p>
                <a href="#">شاهد</a>
            </div>
            <div class="img-slider">
                <img src="img/slide_2.png" class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s"/>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="container">
            <div class="info">
                <h2 class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s">سفير النوايا الحسنة السيد <span>أحمد الطلحي</span></h2>
                <p class="wow fadeInUp" data-wow-duration="4s" data-wow-delay="2s">يقول عنه أتباعه ومُحِبُّوه إنه نموذج للشاب الذي نشأ في طاعة الله ومرضاة نبيه، وطالب العلم الذي لا تحول المسافات والعوائق بينه وبين بُغْيَتِه.</p>
                <a href="#">المزيد</a>
            </div>
            <div class="img-slider">
                <img src="img/slide_3.png" class="wow fadeIn" data-wow-duration="4s" data-wow-delay="2s"/>
            </div>
        </div>
    </div>
</div>
<!--//Hero slider-->

<!-- clear section -->
<section class="clear_sec">
    <div class="bg-opacity"></div>
</section>
<!-- //clear section -->

<!-- About section -->
<section class="about_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h2>السيرة الذاتية<img src="img/tepo4.png" /></h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="middle-img wow fadeInUp hvr-float" data-wow-duration="2s" data-wow-delay=".6s">
                    <img class="img-responsive" src="img/about_sec.jpg" >
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <p>عُرِف الشيخ أحمد الطلحي بتأليف الكثير من الكتب والمشاركة في العديد من المحاضرات والمناظرات والمؤتمرات على الصعيدين المحلي والدولي، كما اشتُهر بتنشيط عدد من البرامج التلفزيونية على القنوات الفضائية العربية لعل أبرزها برنامجه الناجح "تبسَّم".</p>
            </div>
        </div>
    </div>
</section>
<!-- //About section -->

<!-- newslatter section -->
<section class="newslatter">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-1 col-xs-4"><i class="fa fa-send"></i></div>
            <div class="col-md-4 col-sm-3 col-xs-8">
                <p>إشترك ليصلك جديد <img src="img/tepo3.png" /></p>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="exampleInputEmail2">البريد الالكتروني</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="example@example.com">
                  </div>
                  <button type="submit" class="btn btn-default">إرسال</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- //newslatter section -->

<!-- books section -->
<section class="sec-books">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="middle-img">
                    <a href="{{ url('/book_single')}}"><img class="img-responsive" src="img/book_1.jpg" alt="..." ></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <h3>أحدث إصدارات <img src="img/tepo3.png" /></h3>
                <p class="title">أساس علوم الدين:</p>
                <ul class="list-unstyled">
                    <li><p><i class="fa fa-moon-o"></i> الطهارة وأقسامها</p></li>
                    <li><p><i class="fa fa-moon-o"></i> فرائض الوضوء</p></li>
                    <li><p><i class="fa fa-moon-o"></i> نواض الوضوء</p></li>
                    <li><p><i class="fa fa-moon-o"></i> فرائض الغسل وسنة </p></li>
                    <li><p><i class="fa fa-moon-o"></i> التيمم وموجباته</p></li>
                    <li><p><i class="fa fa-moon-o"></i> الصلاة وشروطها</p></li>
                </ul>
            </div>
            <div class="more-books">
                <a href="{{ url('/all_books')}}">شاهد جميع الأصدارات</a>
            </div>
        </div>
    </div>
</section>
<!-- //books section -->

<!-- photos section -->
<section class="sec-photos">
    <div class="container">
        <div class="row title">
            <div class="col-xs-6">
                <h2>ألبوم الصور</h2>
            </div>
            <div class="col-xs-6 text-left">
                <a href="/photos">شاهد الكل</a>
            </div>
        </div>
            <ul id="lightGallery" class="gallery list-unstyled">
                <li data-src="img/photo1.jpg"> 
                    <a href="#">
                    <img src="img/photo1.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a>
                </li>
                <li data-src="img/photo2.jpg" > 
                    <a href="#">
                    <img src="img/photo2.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo3.jpg"> 
                    <a href="#">
                    <img src="img/photo3.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo4.jpg" > 
                    <a href="#">
                    <img src="img/photo4.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo5.jpg"> 
                    <a href="#">
                    <img src="img/photo5.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo6.jpg" > 
                    <a href="#">
                    <img src="img/photo6.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo7.jpg" > 
                    <a href="#">
                    <img src="img/photo7.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo8.jpg"> 
                    <a href="#">
                    <img src="img/photo8.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
                <li data-src="img/photo9.jpg" > 
                    <a href="#">
                    <img src="img/photo9.jpg" />
                    <p>عنوان يعبر عن الصورة</p>
                    </a> 
                </li>
            </ul>	
    </div>
</section>
<!-- //photos section -->

<!-- ring back tone section -->
<section class="sec-rbt">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h2>إشترك فى خدمة الرسائل النصية <img src="img/tepo4.png" /></h2>
            </div>
            <div class="col-md-6 col-sm-6">
                <p>تابع كل جديد من خلال الرسائل النصية.</p>
                <a href="#">إشترك الان</a>
            </div>
        </div>
    </div>
</section>
<!-- //ring back tone section -->
@stop
















