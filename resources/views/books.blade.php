@extends('layout')

@section('content')
<!-- clear section -->
<section class="clear_sec in_pages">
    <div class="bg-opacity">
        <div class="container">
            <div class="info">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ol class="breadcrumb">
                            <li><a href="#">الرئيسية</a></li>
                            <li class="active"><a href="#">كتب</a></li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h1>كتب</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //clear section -->
<section class="books_pages pages-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="img/book_1.jpg" alt="...">
                    <div class="caption">
                        <h3><a href="{{ url('/book_single')}}">أساس علوم الدين</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="img/book_1.jpg" alt="...">
                    <div class="caption">
                        <h3><a href="{{ url('/book_single')}}">أساس علوم الدين</a></h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@stop 
