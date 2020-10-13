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
                    <form class="form-horizontal Career">
                      <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">First Name (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="firstName" placeholder="First Name">
                        </div>
                      </div>
                        
                        <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email (required)</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="Headline" class="col-sm-2 control-label">position (required)</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Headline" placeholder="Headline">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="Phone" class="col-sm-2 control-label">Phone (required)
</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Phone" placeholder="Phone">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="Summary" class="col-sm-2 control-label">Summary
</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="3" placeholder="Summary" id="Summary"></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="exampleInputFile" class="col-sm-2 control-label">Upload resume (required)
</label>
                        <div class="col-sm-10">
                          <input type="file" id="exampleInputFile">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="Portfolio" class="col-sm-2 control-label">Portfolio URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="Portfolio" placeholder="Portfolio URL">
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