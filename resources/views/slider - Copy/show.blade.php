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
                <a href="{{url('slider')}}">Sliders</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Sliders</li>
        </ul>
    </div>
     <!-- BEGIN Main Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-file"></i> Slider Info</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive img-thumbnail" src="{{url($slider->photo_path)}}" alt="profile picture" />
                            <br/><br/>
                        </div>
                        <div class="col-md-9 user-profile-info">
                            <p><span>Title:</span> {{$slider->title}}</p>
                            <p><span>Link:</span> {{$slider->link}}</p>
                            <p><span>Description:</span> {{$slider->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Breadcrumb -->
    @include('partials.footer')

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
@endsection

@section('customScript')
    <script>
        $('#slider').addClass('active');
        $('#slider-index').addClass('active');
    </script>
@endsection