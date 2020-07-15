@extends('adminlte::page')

@section('css_home')
<link rel="stylesheet" type="text/css" href="theme/styles/bootstrap4/bootstrap.min.css">
<link href="theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="theme/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="theme/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="theme/plugins/OwlCarousel2-2.2.1/animate.css">
<link href="theme/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="theme/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="theme/styles/responsive.css">
@endsection

@section('content')
<div class="container">
  @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
  @endif
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">{{__('Create Category')}}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">{{__('Name')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" autocomplete="name" autofocus>
          </div>
          @error('name')
        <span class="invalid-feedback" style="padding-right: 200px" role="alert">
            <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="form-group row">
          <label for="parent_id" class="col-sm-2 control-label">{{ __('Parent') }}</label>
           <div class="col-md-6">
              <select id="parent_id" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value="{{ old('parent_id') }}">
                  <option value="">Select parent</option>
                  @foreach ($categories as $cate)
                      <option
                          value="{{ $cate->id }}" {{ (isset($category->parent) && $cate->id == $category->parent->id) || ($cate->id == old('parent_id')) ? 'selected' : '' }}>
                          {{ $cate->name }}
                      </option>
                  @endforeach
              </select>
              @error('parent_id')
                  <span class="invalid-feedback" role="alert">
                      <strong style="color: red">{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info">{{__('Create')}}</button>
      </div>
                <!-- /.box-footer -->
    </form>
  </div>
</div>
@endsection

@section('js_home')
<script src="theme/js/jquery-3.2.1.min.js"></script>
<script src="theme/styles/bootstrap4/popper.js"></script>
<script src="theme/styles/bootstrap4/bootstrap.min.js"></script>
<script src="theme/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="theme/plugins/easing/easing.js"></script>
<script src="theme/plugins/parallax-js-master/parallax.min.js"></script>
<script src="theme/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="theme/js/custom.js"></script>
@endsection
