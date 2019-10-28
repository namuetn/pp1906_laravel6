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
<h1>Product List</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div><a href="/admin/products/create" class="btn btn-primary">Create</a></div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>
                <th>Created by</th>
                <th>Updated at</th>
                <th>Created at</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>	
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->content }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category ? $product->category->name : '' }}</td>
                    <td>{{ $product->user ? $product->user->name : '' }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-light">Edit</a>

                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>
                <th>Created by</th>
                <th>Updated at</th>
                <th>Created at</th>
                <th>Operation</th>
            </tr>
        </tfoot>
    </table>
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

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
    	$('#example').DataTable();
	} );
</script>
@endsection
