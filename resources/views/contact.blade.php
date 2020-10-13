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
                            <li class="active"><a href="#">أتصل بنا</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>أتصل بنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<section class="contact_page pages-body">
    <div class="container">
        <h2>يسعدنا تواصلك معنا:</h2>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form>
                    <div class="form-inline">
                        <input type="text" class="form-control col-md-6" placeholder="الاسم.." >
                        <input type="email" class="form-control col-md-6" placeholder="البريد الإلكتروني" >
                    </div>
                    <textarea class="form-control" placeholder="نص الرسالة..." rows="5"></textarea>
                    <button type="submit">إرسال</button>
                </form>
            </div>
        </div>
        
    </div>
</section>

@stop 