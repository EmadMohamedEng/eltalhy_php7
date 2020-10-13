@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit section
    </h1>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-danger'>section Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("section")!!}/{!!$section->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$section->
            title!!}"> 
        </div>
        <div class="form-group">
            <label for="page_number">page_number</label>
            <input id="page_number" name = "page_number" type="text" class="form-control" value="{!!$section->
            page_number!!}"> 
        </div>
        <div class="form-group">
            <label>books Select</label>
            <select name = 'book_id' class = "form-control">
                @foreach($books as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection