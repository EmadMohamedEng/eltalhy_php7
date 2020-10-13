@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create section
    </h1>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-danger'>section Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("section")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="title">title</label>
            <input id="title" name = "title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="page_number">page_number</label>
            <input id="page_number" name = "page_number" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>books Select</label>
            <select name = 'book_id' class = 'form-control'>
                @foreach($books as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection