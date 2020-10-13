@extends('layout')

@section('content')
        <div class="articles">
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="/">Home</a></li>
                  <li class="active">Articles</li>
                </ol>
            </div>
            <div class="posts">
                <div class="container">
                    <div class="row">
                        @if($posts->count() > 0)
                        @foreach($posts as $post)
                         <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                                <div class="news-img">
                                    <img class="img-responsive" src="img/hero.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>{{ $post->title  }}</h3>
                                <p>{{ $post->description  }}</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        @endforeach
                        @endif
                        
                        
<!--
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                                <div class="news-img">
                                    <img class="img-responsive" src="img/hero.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                              <div class="news-img">
                                    <img class="img-responsive" src="img/2.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                              <div class="news-img">
                                    <img class="img-responsive" src="img/hero.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                              <div class="news-img">
                                    <img class="img-responsive" src="img/1.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                              <div class="news-img">
                                    <img class="img-responsive" src="img/2.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="single.html" class="thumbnail text-center">
                              <div class="news-img">
                                    <img class="img-responsive" src="img/3.jpg" alt="...">
                                </div>
                              <div class="caption">
                                <h3>Cras justo odio, dapibus ac facilisis in</h3>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                              </div>
                                <span class="btn btn-primary hvr-sweep-to-bottom" role="button">more</span>
                            </a>
                        </div>
-->
                        
                    </div>
                </div>
                
                
            </div>
        </div>
@stop