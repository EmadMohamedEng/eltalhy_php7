@extends('layout')
@section('style')
<link href="{{ url('js/book/jquery.booklet.latest.css')}}" rel="stylesheet">
@stop
@section('content')



<div id="mybook">
  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(4).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(2).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(3).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(5).jpg" alt="book">
  </div>
  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(4).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(2).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(3).jpg" alt="book">
  </div>

  <div class="mybook_img">
    <img src="../uploads/book/1492625035_page_(5).jpg" alt="book">
  </div>
</div>

<div class="pdf_download">
  <img src="../img/book_1.jpg" alt="">
  <a href="{{url('book/'.$book->id.'/download')}}">تحميل الكتاب <i class="fa fa-book" aria-hidden="true"></i></a>
</div>

@stop

@section('script')
<script src="{{ url('js/book/jquery-2.1.0.min.js')}}"></script>
<script src="{{ url('js/book/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{ url('js/book/jquery.booklet.latest.min.js')}}"></script>
<script src="{{ url('js/book/jquery.easing.1.3.js')}}"></script>

<script>
  $(function() {
    //single book
    $('#mybook').booklet({
      width: 1000,
      height: 720,
      direction: "RTL",
    });
  });
</script>

@stop
