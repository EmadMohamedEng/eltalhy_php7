@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show section
    </h1>
    <br>
    <form method = 'get' action = '{!!url("section")!!}'>
        <button class = 'btn btn-primary'>section Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$section->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>page_number : </i></b>
                </td>
                <td>{!!$section->page_number!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$section->book->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$section->book->description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>photo_path : </i></b>
                </td>
                <td>{!!$section->book->photo_path!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$section->book->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$section->book->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection