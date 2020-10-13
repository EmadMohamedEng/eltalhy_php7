@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show contact
    </h1>
    <br>
    <form method = 'get' action = '{!!url("contact")!!}'>
        <button class = 'btn btn-primary'>contact Index</button>
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
                    <b><i>name : </i></b>
                </td>
                <td>{!!$contact->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$contact->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>message : </i></b>
                </td>
                <td>{!!$contact->message!!}</td>
            </tr>
        </tbody>
    </table>
    
</section>
@endsection