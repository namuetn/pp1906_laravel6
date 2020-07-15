@extends('master_shop')

@section('css_cart')
<link rel="stylesheet" type="text/css" href="theme/styles/bootstrap4/bootstrap.min.css">
<link href="theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="theme/styles/cart.css">
<link rel="stylesheet" type="text/css" href="theme/styles/cart_responsive.css">
@endsection

Okeeeeeeeeeeeeeeeee
@section('js_cart')
<script src="theme/js/jquery-3.2.1.min.js"></script>
<script src="theme/styles/bootstrap4/popper.js"></script>
<script src="theme/styles/bootstrap4/bootstrap.min.js"></script>
<script src="theme/plugins/easing/easing.js"></script>
<script src="theme/plugins/parallax-js-master/parallax.min.js"></script>
<script src="theme/js/cart_custom.js"></script>
<script src="{{ asset('js/ajax_update_delete_orders.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@endsection