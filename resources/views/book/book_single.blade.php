@extends('layout')
@section('style')
<link href="{{ url('js/book/jquery.booklet.latest.css')}}" rel="stylesheet">
@stop
@section('content')

<div id="mybook">
  <div>
    <img style="width: 100%;" src="../img/book_1.jpg" alt="">
  </div>
  <div>
    <img style="width: 100%;" src="../img/book_1.jpg" alt="">
  </div>
  <div>
    <img style="width: 100%;" src="../img/book_1.jpg" alt="">
  </div>
  <div>
    <img style="width: 100%;" src="../img/book_1.jpg" alt="">
  </div>
</div>

@stop

@section('script')
<script src="{{ url('js/book/jquery-ui-1.10.4.min.js')}}"></script>
<script src="{{ url('js/book/jquery.easing.1.3.js')}}"></script>
<script src="{{ url('js/book/jquery.booklet.latest.min.js')}}"></script>
<script>
  $(function() {
    //single book
    $('#mybook').booklet();

    //multiple books with ID's
    $('#mybook1, #mybook2').booklet();

    //multiple books with a class
    $('.mycustombooks').booklet();
  });
</script>

@stop
