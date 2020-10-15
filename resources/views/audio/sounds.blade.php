@extends('layouts.layout')

@section('content')
<style>
  @media (max-width: 320px) {
    .in_pages {
      margin-top: 0;
    }

    .in_pages .bg-opacity,
    .sounds_pages {
      padding: 0;
    }
  }
</style>
<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(img/bg_pages.jpg);">
  <div class="bg-opacity">
    <div class="container">
      <div class="info">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}">الرئيسية</a></li>
              <li class="active"><a href="#">الصوتيات</a></li>
            </ol>
          </div>
          <div class="col-md-6 col-sm-6">
            <h1>الصوتيات</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //clear section -->
<section class="sounds_pages">
  <div class="container">
    <div class="row">
      @foreach($audios as $audio)
      <?php $date = new Carbon\Carbon($audio->created_at); ?>
      <div class="col-md-12">
        <div class="item text-center">
          <iframe style="width:100%" height="166" src="{{$audio->sound_link}}&amp;color=9b59b6&amp;auto_play=false&amp;show_artwork=true"></iframe>
          <h2><a href="{{ url('/sound/'.$audio->slug)}}">{{$audio->title}}</a></h2>
          <p class="date">{{$date->toFormattedDateString()}}</p>
        </div>
      </div>
      @endforeach

    </div>
    <div class="row">
      <div class="pages_numbers">
        {!! $audios->render() !!}
      </div>
    </div>
  </div>
</section>

@section('scriptActive')
<script type="text/javascript">
  $('a[href="{{ url(' / sounds ')}}"]').parent().addClass('active');
</script>
@stop

@stop
