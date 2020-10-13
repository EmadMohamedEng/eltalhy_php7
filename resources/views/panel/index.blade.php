@extends('panelLayout')

@section('content')

<!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> Dashboard</h1>
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="{{url('panel')}}">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->

                <!-- BEGIN First Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($sliders)}}</p>
                                <p class="title">Sliders</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-rss-square"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($articles)}}</p>
                                <p class="title">Articles</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-gears"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($settings)}}</p>
                                <p class="title">Settings</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($services)}}</p>
                                <p class="title">Services</p>
                            </div>
                        </div>
                    </div>
					
					<div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($statistics)}}</p>
                                <p class="title">Statistics</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($clients)}}</p>
                                <p class="title">Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($categories)}}</p>
                                <p class="title">Categories</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="tile tile-light-blue">
                            <div class="img">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="content">
                                <p class="big">+{{count($employees)}}</p>
                                <p class="title">Employees</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END First Row -->


                <!-- END Main Content -->

                <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
            <!-- END Content -->

@stop