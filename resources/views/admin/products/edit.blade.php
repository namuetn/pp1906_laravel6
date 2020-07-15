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
      <h3 class="box-title">{{__('Update Product')}}</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">{{__('Name')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') ?? $product->name }}" autocomplete="name" autofocus>
          </div>
          @error('name')
            <span class="invalid-feedback" style="padding-right: 200px" role="alert">
                <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="quantity" class="col-sm-2 control-label">{{__('Quantity')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="Quantity" value="{{ old('quantity') ?? $product->quantity }}" autocomplete="quantity" autofocus>
          </div>
          @error('quantity')
            <span class="invalid-feedback" style="padding-right: 200px" role="alert">
                <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="content" class="col-sm-2 control-label">{{__('content')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="content" value="{{ old('content') ?? $product->content }}" autocomplete="content" autofocus>
          </div>
          @error('content')
            <span class="invalid-feedback" style="padding-right: 200px" role="alert">
                <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="price" class="col-sm-2 control-label">{{__('price')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" value="{{ old('price') ?? $product->price }}" autocomplete="price" autofocus>
          </div>
          @error('price')
            <span class="invalid-feedback" style="padding-right: 200px" role="alert">
                <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="category_id" class="col-sm-2 control-label">{{ __('Category') }}</label>

                            <div class="col-md-6">

                                <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" checked autocomplete="category_id" value="{{old('category_id') ?? $product->category_id}}" required="" >
                                    <option value="0">Select Parent</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>                                      
                                    @endforeach    
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
        </div>
        <!-- <div class="form-group">
          <label for="image" class="col-sm-2 control-label">{{__('image')}}</label>

          <div class="col-sm-10">
            <input style="width: 545px" type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="image" value="{{ old('image') ?? $product->image}}" autocomplete="image" autofocus>
          </div>
          @error('image')
            <span class="invalid-feedback" style="padding-right: 200px" role="alert">
                <strong style="padding-left: 207px; color: red">{{ $message }}</strong>
            </span>
            @enderror
        </div> -->

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info">{{__('Update')}}</button>
      </div>
                <!-- /.box-footer -->
    </form>
  </div>
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
