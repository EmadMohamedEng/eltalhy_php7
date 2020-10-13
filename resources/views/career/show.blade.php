@extends('panelLayout')

@section('content')
 <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> User Profile</h1>
                        <h4>User profile sample</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="{{url('/panel')}}">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active"></li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="fa fa-file"></i> Profile Info</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-9 user-profile-info">
                                        <p><span>First Name:</span> {{$career->first_name}}</p>
                                        <p><span>Last Name:</span> {{$career->last_name}}</p>
                                        <p><span>Email:</span> <a href="mailto:#">{{$career->email}}</a></p>
                                        <p><span>Mobile Number:</span>{{$career->phone_number}}</p>
                                        <p><span>Job:</span>{{$career->job->name}}</p>
                                        <p><span>Portifolio:</span> <a href="#">{{$career->portfolio_url}}</a></p>
                                        <p><span>Summery:</span>{{$career->summery}}</p>
                                        <p><span>Resume:</span><a href="{{ url("/career/".$career->id.'/getResume') }}"><i class="fa fa-file"></i>Resume</a></p>
                                        <p><span>created at:</span>{{$career->created_at}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                </div>
                <!-- END Main Content -->
                
                <footer>
                    <p>2015 © FLATY Admin Template.</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->
@stop