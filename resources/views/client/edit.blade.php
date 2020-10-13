@extends('panelLayout')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>update Client</h1>
            <h4>update Client</h4>
        </div>
    </div>
    <!-- END Page Title -->

    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{url('panel')}}">Home</a>
                <span class="divider"><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="active">Client</li>
        </ul>
    </div>
     @if (count($errors) > 0)
	    <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

    @if ( Session::has('failed') )
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>failed!</strong> {{ Session::get('failed')}}
        </div>
    @endif
    <!-- END Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>update Client</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('client/'.$client->id.'/update')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
              			{!! csrf_field() !!}
                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Name*</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="name" id="name" placeholder="name" value="{{$client->name}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Website Link*</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="website_link" id="website_link" value="{{$client->website_link}}" placeholder="Website Link" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Facebook Link*</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="facebook_link" value="{{$client->facebook_link}}" id="facebook_link" placeholder="Facebook Link" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 col-lg-2 control-label">Category</label>
                          <div class="col-sm-9 col-lg-10 controls">
                             <select class="form-control chosen" data-placeholder="Choose a Category" name="category_id" tabindex="1" required>
                                <option value=""> </option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{($client->category_id == $category->id)? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                             </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
                          <div class="col-sm-9 col-lg-10 controls">
                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
                                   <img src="{{url($client->picture)}}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                   <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
                                   <span class="fileupload-exists">Change</span>
                                   <input type="file" class="file-input" name="picture" /></span>
                                   <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                             </div>
                             <span class="label label-important">NOTE!</span>
                             <span>Attached image img-thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</span>
                          </div>
                       </div>
                        <div class="form-group last">
                            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                               <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
                            </div>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop