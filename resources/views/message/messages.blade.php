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
<section class="messages_pages  pages-body">
    <div class="container">
        <div class="row">
        @foreach($messages as $message)
            <?php $date = new Carbon\Carbon($message->created_at);?>
            <div class="col-sm-12 col-md-12">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$message->title}}</h3>
                        <div class="profile-img">
                            <img src="{{url('img/tal7y_10.jpg')}}" class="img-responsive" alt="السيد أحمد الطلحي وما ابرئ نفسي">
                        </div>
                        <p class="date">{{$date->toFormattedDateString()}}</p>
                        <p>{{$message->message}} </p>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
        <div class="row">
            <div class="pages_numbers">
                {!! $messages->render() !!}
            </div>
        </div>
    </div>
</section>
@section('scriptActive')
<script type="text/javascript">
   $('a[href="{{ url('/messages')}}"]').parent().addClass('active');
</script>
@stop
@stop
