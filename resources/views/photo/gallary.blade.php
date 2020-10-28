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
                <ul id="portfolio-filters" class="list-unstyled">
                    <li data-id="undefined"><a class="current" href="#all" title="">الكل</a></li>

                    @foreach($categories as $category)
                        <li data-id="{{$category->id}}"><a href="#category_{{$category->id}}" class="category_{{$category->id}}"  title="" rel="mo7adrat">{{$category->name}}</a></li>
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
        <div class="container lightGallery" action="inactive" page='1'>
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
    </div>
</section>
<!-- //photos section -->


@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('/gallary')}}"]').parent().addClass('active');
</script>
<script>
    $(window).on("scroll", function(Event) {
      Event.preventDefault();
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
      var action = $('.lightGallery').attr('action');
      var page = $('.lightGallery').attr('page');
      var category_id = $('.lightGallery').attr('category_id');
    //  console.log("page = "+page);
    //  console.log("category_id = "+category_id);
    //   if ($(window).scrollTop() + $(window).height() > $(".lightGallery").height() && action == 'inactive') {
      if ($(window).scrollTop() + $(window).height() == $(document).height() && action == 'inactive') {
        $('.lightGallery').attr('action', 'active');
        page++;
        $('.lightGallery').attr('page', page);

        load_snap_data(page, category_id);
      }
    });

    function load_snap_data(page, category_id) {
      $('.load').show();
      $.ajax({
        type: 'GET',
        url: '?page=' + page + '&category_id=' + category_id,
        success: function(data) {
        if(page == 1){
          $('#lightGallery').html(data);
          $('.lightGallery').attr('page', 1);
        }else{
          $('#lightGallery').append(data);
        }

          $('.lightGallery').attr('action', 'inactive');
          $("img.lazy").lazyload();
          $(`#${page}`).lightGallery();


        }
      })
    }

    $('#portfolio-filters li').click(function(){

      var category_id = $(this).data('id');
      $('.lightGallery').attr('category_id', category_id);
      console.log($('.lightGallery').attr('category_id'));

      $(this).children().addClass('current');
      $(this).siblings().children().removeClass('current');

      page = 1 ;
      load_snap_data(page, category_id);
/*
      $.ajax({
        type: "post",
        url: "{{url('gallery_category_id')}}",
        data: {'category_id': category_id},
        success: function (data) {
          $('#lightGallery').html(data);
          $('.lightGallery').attr('action', 'inactive');
          $("img.lazy").lazyload();
          $(`#category_id_${category_id}`).lightGallery();
          $('.lightGallery').attr('page', 1);
        }
      });
      */

    });

  </script>

@stop

@stop
