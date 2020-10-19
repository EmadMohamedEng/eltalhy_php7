@extends('layouts.main')
@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Slider</h1>
            <h4>Find Slider Options</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('dashboard')}}">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
             <li>
                <i class="fa fa-bars"></i>
                <a href="{{url('book')}}">Books</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Book</li>
        </ul>
    </div>

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{ Session::get('success')}}
        </div>
    @endif
     <!-- BEGIN Main Content -->
   <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-file"></i> Book Info</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-9 user-profile-info">
                            <p><span>Book Title:</span>{{$book->title}}</p>
                            <p><span>Description:</span>{!!$book->description!!}</p>
                            <p><span>Sections:</span></p>
                            <ul>
                                @foreach($book->sections as $section)
                                    <li>{{$section->title}} - {{$section->page_number}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN Main Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-picture-o"></i> Book content</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <ul class="gallery">
                        @foreach($photos as $photo)
                            <li id="item_{{$photo->id}}" class={{($book->start_cover != $photo->id && $book->end_cover != $photo->id) ? 'sorted':'unsorted'}}>
                                <a href="{{url($photo->photo_path)}}" rel="prettyPhoto" title="{{$book->title}}">
                                    <div>
                                        <img src="{{url($photo->photo_path)}}" width="230" height="173" alt="" />
                                        <i></i>
                                    </div>
                                </a>
                                <div class="gallery-tools">
                                    @if($book->start_cover == $photo->id)
                                        <a href="#">Full Book Cover</a>
                                    @elseif($book->end_cover == $photo->id)
                                        <a href="#">Front Book Cover</a>
                                    @else
                                        <a href="{{url('book/'.$book->id.'/photo/'.$photo->id.'/cover')}}" title = "make Full cover" ><i class="fa fa-link"></i></a>
                                        <a href="{{url('book/'.$book->id.'/photo/'.$photo->id.'/indexcover')}}" title = "make Front cover" ><i class="fa fa-link"></i></a>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Main Content -->
    <!-- END Breadcrumb -->
    @include('partials.footer')

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
@endsection

@section('customScript')
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $('#book').addClass('active');
        $('#book-index').addClass('active');
        // $(".gallery").sortable();
        $( ".gallery" ).sortable({
           update: function(event, ui) {
                serial = $('.gallery').sortable('serialize');
                console.log(serial);
                $.ajax({
                    url: "{{url('employee/update_sequence')}}",
                    type: 'post',
                    data: serial,
                })
                .done(function() {
                    console.log("success");
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });


            },
        });
        $( ".gallery" ).sortable({
            cancel: '.unsorted'
        });

    </script>
@endsection
