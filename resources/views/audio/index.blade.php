@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Audios Table</h1>
            <h4>Find Audios</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('dashboard')}}">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Audios Table</li>
        </ul>
    </div>
    <!-- END Breadcrumb -->

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> {{ Session::get('success')}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="box box-black">
                <div class="box-title">
                    <h3><i class="fa fa-table"></i> Audios Table</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="" href="{{url('audio/new')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-advance">
                        <thead>
                            <tr>
                                <th style="width:18px"><input type="checkbox"></th>
                                <th>title</th>
                                <th>Created at</th>
                                <th class="visible-md visible-lg" style="width:130px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($audios as $audio)
                            <tr class="table-flag-blue">
                                <td><input type="checkbox"></td>
                                <td><a href="{{url('audio/'.$audio->id.'/show')}}" >{{$audio->title}}</a></td>
                                <td>{{$audio->created_at}}</td>
                                <td class="visible-md visible-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-sm show-tooltip" title="" href="{{url('audio/'.$audio->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('audio/'.$audio->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('customScript')
    <script>
        $('#audio').addClass('active');
        $('#audio-index').addClass('active');
    </script>
@endsection