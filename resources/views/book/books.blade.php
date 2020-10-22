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
              <li class="active"><a href="#">كتب</a></li>
            </ol>
          </div>
          <div class="col-md-6 col-sm-6">
            <h1>كتب</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //clear section -->
<section class="books_pages pages-body">
  <div class="container">
    <div class="row">
      @foreach($books as $book)
      <div class="col-sm-6 col-md-6">
        <div class="thumbnail">
          <?php $photo = App\BookPhoto::find($book->end_cover); ?>
          <a href="{{ url('/book_single/'.$book->id)}}">
            <img src="{{url($photo->photo_path)}}" alt="...">
          </a>
          <div class="caption">
            <h3><a href="{{ url('/book_single/'.$book->id)}}">
          {{ $book->title }}
          </a></h3>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@section('scriptActive')
<script type="text/javascript">
  $('a[href="{{ url('/all_books')}}"]').parent().addClass('active');
</script>
@stop
@stop
