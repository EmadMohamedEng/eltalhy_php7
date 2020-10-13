@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Section Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("section")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New section</button>
    </form>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/book">Book</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>title</th>
            <th>page_number</th>
            <th>title</th>
            <th>description</th>
            <th>photo_path</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($sections as $section) 
            <tr>
                <td>{!!$section->title!!}</td>
                <td>{!!$section->page_number!!}</td>
                <td>{!!$section->book->title!!}</td>
                <td>{!!$section->book->description!!}</td>
                <td>{!!$section->book->photo_path!!}</td>
                <td>{!!$section->book->created_at!!}</td>
                <td>{!!$section->book->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/section/{!!$section->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/section/{!!$section->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/section/{!!$section->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $sections->render() !!}

</section>
@endsection