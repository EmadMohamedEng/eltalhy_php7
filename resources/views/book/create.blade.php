@extends('layouts.main')

@section('content')
<!-- BEGIN Content -->
<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-o"></i>Books</h1>
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
            <li class="active">Sliders</li>
        </ul>
    </div>
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- END Breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-title">
                    <h3><i class="fa fa-bars"></i>Book</h3>
                    <div class="box-tool">
                        <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                        <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form action="{{url('book')}}" method="post" class="form-horizontal form-bordered form-row-stripped" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                         <div class="form-group">
                            <label for="textfield5" class="col-sm-3 col-lg-2 control-label">Title</label>
                            <div class="col-sm-9 col-lg-10 controls">
                                <input type="text" name="title" id="title" placeholder="title" class="form-control" required>
                            </div>
                        </div>

                        <div id="section">
                            <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                               <label class="col-sm-3 col-lg-2 control-label">Section</label>
                               <div class="col-sm-2 col-lg-3 controls">
                                  <input type="text" placeholder="section" class="form-control" name="sections[]" required>
                               </div>
                               <div class="col-sm-2 col-lg-3 controls">
                                  <input type="number" placeholder="page number" class="form-control" name="numbers[]" required>
                               </div>
                                <div class="col-sm-2 col-lg-2 controls">
                                  <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Book images</label>
                            <div class="col-sm-9 col-lg-10 controls">
                               <input type="file" class="form-control" name="fileToUpload[]" multiple />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Book PDF</label>
                            <div class="col-sm-9 col-lg-10 controls">
                               <input type="file" class="form-control" name="bookPdf" multiple />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 col-lg-2 control-label">Description</label>
                            <div class="col-sm-9 col-lg-10 controls">
                               <textarea class="form-control col-md-12 ckeditor" name="content" rows="6"></textarea>
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

@section('customScript')
    <script>
        $('#book').addClass('active');
        $('#book-new').addClass('active');
        $('.fa-plus').click(function() {
            $('#section').append('\
                    <div class="form-group added">\
                       <label class="col-sm-3 col-lg-2 control-label">Section</label>\
                       <div class="col-sm-2 col-lg-3 controls">\
                          <input type="text" placeholder="section" class="form-control" name="sections[]" required>\
                       </div>\
                       <div class="col-sm-2 col-lg-3 controls">\
                          <input type="number" placeholder="page number" class="form-control" name="numbers[]" required>\
                       </div>\
                       <div class="col-sm-2 col-lg-2 controls">\
                          <a href="#"><i class="fa fa-times"></i></a>\
                        </div>\
                    </div>\
                ');
        });

        $('#section').on('click','.fa-times',function() {
            event.preventDefault();
            $(this).closest('.form-group').remove();
        });

        Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
              // The configuration we've talked about above
              autoProcessQueue: false,
              uploadMultiple: true,
              parallelUploads: 100,
              maxFiles: 100,

              // The setting up of the dropzone
              init: function() {
                var myDropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                  // Make sure that the form isn't actually being sent.
                  e.preventDefault();
                  e.stopPropagation();
                  myDropzone.processQueue();
                });

                // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                // of the sending event because uploadMultiple is set to true.
                this.on("sendingmultiple", function() {
                  // Gets triggered when the form is actually being sent.
                  // Hide the success button or the complete form.
                });
                this.on("successmultiple", function(files, response) {
                  // Gets triggered when the files have successfully been sent.
                  // Redirect user or notify of success.
                });
                this.on("errormultiple", function(files, response) {
                  // Gets triggered when there was an error sending the files.
                  // Maybe show form again, and notify user of error
                });
              }

            }
    </script>
@endsection