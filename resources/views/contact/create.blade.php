@extends('layouts.layout')

@section('content')

<style>
  @media (max-width: 767px) and (min-width: 321px) {
    .in_pages {
      margin-top: 90px;
    }
  }
</style>

<!-- clear section -->
<section class="clear_sec in_pages" style="background-image: url(img/bg_pages.jpg);">
  <div class="bg-opacity">
    <div class="container">
      <div class="info">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ol class="breadcrumb">
              <li><a href="#">الرئيسية</a></li>
              <li class="active"><a href="#">أتصل بنا</a></li>
            </ol>
          </div>
          <div class="col-md-6 col-sm-6">
            <h1>أتصل بنا</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //clear section -->
<section class="contact_page pages-body">
  <div class="container">
    <h2>يسعدنا تواصلك معنا:</h2>
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>نجاح!</strong> {{ Session::get('success')}}
    </div>
    @endif
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <form method="post" action="{{url('contact')}}">
          {{ csrf_field() }}
          <div class="form-inline">
            <div class="col-md-6 form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
              <input type="text" class="form-control " value="{{ old('contact_name') }}" placeholder="الاسم.." name="contact_name" required>
              @if ($errors->has('contact_name'))
              <span class="help-block">
                <strong>{{ $errors->first('contact_name') }}</strong>
              </span>
              @endif
            </div>
            <div class=" col-md-6 form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
              <input type="email" class="form-control " value="{{ old('contact_email') }}" placeholder="البريد الإلكتروني" name="contact_email" required>
              @if ($errors->has('contact_email'))
              <span class="help-block">
                <strong>{{ $errors->first('contact_email') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <div class="col-md-12 form-group{{ $errors->has('contact_message') ? ' has-error' : '' }}">
            <textarea class="form-control" placeholder="نص الرسالة..." value="{{old('contact_message')}}" rows="5" name="contact_message" required></textarea>
            @if($errors->has('contact_message'))
            <span class="help-block">
              <strong>{{$errors->first('contact_message')}}</strong>
            </span>
            @endif
          </div>
          <div class="col-md-12 form-group">
            <button type="submit">إرسال</button>
          </div>

        </form>
        <div class="phone_number">
          <h3>رقم التواصل : <span>{{Helper::get_setting_by_key('phone')}}</span></h3>
        </div>
      </div>
    </div>

  </div>
</section>
@section('scriptActive')
<script type="text/javascript">
  $('a[href="{{ url('/contactus')}}"]').parent().addClass('active');
</script>
@stop
@stop
