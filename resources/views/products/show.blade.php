@extends('master_shop')

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
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<a class="btn btn-dark" href="{{ route('products.edit', $product->id)}}">Edit</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
	@csrf
	@method('DELETE')
	<div class="form-group row mb-0">
	    <div class="col-md-6 offset-md-4">
	        <button type="submit" class="btn btn-primary">
	            {{ __('Delete') }}
	        </button>
	    </div>
	</div>
</form>
<div>Show product</div>
<h3>Name: {{$product->name}}</h3>
<h3>Name: {{$product->content}}</h3>
<h3>Name: {{$product->quantity}}</h3>
<h3>Name: {{$product->price}}</h3>
<h3>Create by: {{$product->user  ? $product->user->name : ''}}</h3>
<h3>Create by: {{$product->user  ? $product->user->id : ''}}</h3>

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
