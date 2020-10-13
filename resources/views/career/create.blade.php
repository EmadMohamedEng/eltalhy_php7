@extends('layout')

@section('content')
        <article>
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Career</li>
                </ol>
            </div>
            <div class="post">
                <div class="container">
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
                    @if ( Session::has('success') )
                        <div class="alert alert-success alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Success!</strong> {{ Session::get('success')}}
                        </div>
                    @endif
                    <form class="form-horizontal Career" action="{{url('career')}}" method="post" enctype="multipart/form-data">
                      {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">First Name (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="first_name" id="firstName" placeholder="First Name" required>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="last_name" id="LastName" placeholder="Last Name" required>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email (required)</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-lg-2 control-label">Position (required)</label>
                        <div class="col-sm-9 col-lg-10 controls">
                           <select class="form-control chosen" data-placeholder="Choose a Category" name="position" tabindex="1" required>
                              <option value=""> </option>
                              @foreach($jobs as $job)
                                  <option value="{{$job->id}}">{{$job->name}}</option>
                              @endforeach
                           </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="Phone" class="col-sm-2 control-label">Phone (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="phone_number" id="Phone" placeholder="Phone" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="Summary" class="col-sm-2 control-label">Summary</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" name="summery" placeholder="Summary" id="Summary"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile" class="col-sm-2 control-label">Upload resume (required)</label>
                        <div class="col-sm-10">
                          <input type="file" name="resume" id="exampleInputFile" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="Portfolio" class="col-sm-2 control-label">Portfolio URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="portfolio_url" id="Portfolio" placeholder="Portfolio URL">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default hvr-sweep-to-bottom">Submit your application</button>
                        </div>
                      </div>
                    </form>
                </div>
                
                
            </div>
        </article>
@stop