@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Mentor Table</h1>
            <h4>Find Mentor</h4>
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
            <li class="active">Mentor Table</li>
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
                    <h3><i class="fa fa-table"></i> Mentors Table</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="btn-toolbar pull-right">
                        <div class="btn-group">
                            <a class="btn btn-circle show-tooltip" title="" href="{{url('mentor/new')}}" data-original-title="Add new record"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-advance">
                        <thead>
                            <tr>
                                <th style="width:18px"><input type="checkbox"></th>
                                <th>Name</th>
                                {{-- <th>Created at</th> --}}
                                <th class="visible-md visible-lg" style="width:130px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($mentors as $mentor)
                            <tr class="table-flag-blue">
                                <td><input type="checkbox"></td>
                                <td><a href="{{url('mentor/'.$mentor->id.'/show')}}" >{{$mentor->name}}</a></td>
                                {{-- <td>{{$slider->created_at}}</td> --}}
                                <td class="visible-md visible-lg">
                                    <div class="btn-group">
                                        <a class="btn btn-sm show-tooltip" title="" href="{{url('mentor/'.$mentor->id.'/edit')}}" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-sm btn-danger show-tooltip" title="" onclick = 'return ConfirmDelete()' href="{{url('mentor/'.$mentor->id.'/delete')}}" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
<script>
    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x)
          return true;
        else
          return false;
    }
</script>
@stop
@section('customScript')
    <script>
        $('#mentor').addClass('active');
        $('#mentor-index').addClass('active');
    </script>
@endsection
