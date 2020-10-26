@extends('layouts.main')
@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i> Photo</h1>
            <h4>Find all photos</h4>
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
            <li class="active">Photo</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>sucess!</strong> {{ Session::get('success')}}
    </div>
    @endif
    <!-- BEGIN Main Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-picture-o"></i> Photo</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="clearfix">
                        <div class="pull-left">
                            <div class="btn-toolbar">
                                <div class="btn-group">
                                    <select name="category" class="chosen gallery-cat col-xs-12"
                                        onchange="applyFilter()" data-placeholder="Filter category">
                                        <option value=""> </option>
                                        @foreach($categories as $category)

                                        @if (isset($categoryFilter))
                                        <option value="{{$category->name}}" @if($categoryFilter->name==$category->name)
                                            selected="selected" @endif>{{$category->name}}</option>
                                        @else
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div>
                                {{-- <div class="btn-group">
                                    <a id="filter" class="btn btn-success show-tooltip" title="Apply filter"><i class="fa fa-check"></i></a>
                                </div> --}}
                                <form id="filterForm">
                                </form>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="btn-toolbar">
                                <div class="btn-group">
                                    <a href="{{url('photo/new')}}" class="btn btn-primary show-tooltip"
                                        title="Upload new images"><i class="fa fa-cloud-upload"></i> Upload</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <ul class="gallery">
                        @foreach($photos as $photo)
                        <li>
                            <a href="{{url($photo->photo_path)}}" rel="prettyPhoto" title="{{$photo->title}}">
                                <div>
                                    <img src="{{url($photo->photo_path)}}" width="230" height="173" alt="" />
                                    <i></i>
                                </div>
                            </a>
                            <div class="gallery-tools">
                                <a href="{{url('photo/'.$photo->id.'/delete')}}"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Main Content -->
    @include('partials.footer')

    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END Content -->
@endsection

@section('customScript')
<script>
        $('#photo').addClass('active');
        $('#photo-index').addClass('active');
        function applyFilter(argument) {
            // body...
            var $category = $('.chosen').val();
                if ($category != '') {
                    var $url = '{{url('photo')}}/'+$category;
                    window.location.replace($url);
                }
            }
    </script>
@endsection
