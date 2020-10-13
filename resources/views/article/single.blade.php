@extends('layout')

@section('content')
        <article>
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Articles</a></li>
                  <li class="active">{{$article->title}}</li>
                </ol>
            </div>
            <div class="post">
                <div class="container">
                    <div class="post_title">
                        <h1>{{$article->title}}</h1>
                        <div class="post_date">{{$article->created_at}}</div>
                    </div>
                    <div class="post_contant">
                        <div class="post_img">
                            <img class="img-responsive" src="{{url($article->picture_link)}}" alt="Example for article post" />
                        </div>
                        <div class="post_text">
                            {{-- {{$article->content}} --}}
                            <?php echo html_entity_decode(htmlspecialchars_decode($article->content)); ?>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </article>
@stop