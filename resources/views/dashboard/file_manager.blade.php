@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Books</h1>
        </div>
    </div>
    <!-- END Page Title -->

    <div class="row">
        <div class="col-md-12">
            @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ Session::get('success')}}
            </div>
            @endif
            <div class="box">
                <div class="box-content">
                    <div class="box">
                        <div class="box-title">
                            <h3><i class="fa fa-bars"></i>File System</h3>
                            <div class="box-tool">
                                <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{url('elFinder/elfinder')}}"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
