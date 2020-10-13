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
                            <li class="active"><a href="#">وما أبرئ نفسي</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>وما أبرئ نفسي</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<section class="messages_pages pages-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>مثال لعنوان لكن الغالبية تم تعديلها</h3>
                        <div class="profile-img">
                            <img src="img/profile.jpg" class="img-responsive" alt="السيد أحمد الطلحي وما ابرئ نفسي">
                        </div>
                        <p class="date">5 أبريل 2017</p>
                        <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. </p>
                    </div>
                </div>
            </div>
             
                       
        </div>
        {!! $messages->render() !!}
       {{--  <div class="row">
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
        </div> --}}
    </div>
</section>

@stop 