@extends('master_shop')

@section('css_cart')
<link rel="stylesheet" type="text/css" href="theme/styles/bootstrap4/bootstrap.min.css">
<link href="theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="theme/styles/cart.css">
<link rel="stylesheet" type="text/css" href="theme/styles/cart_responsive.css">
@endsection

@section('content')
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="theme/images/cart.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Shopping Cart</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Shopping Cart</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart -->

	<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_title">your shopping cart</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="cart_bar d-flex flex-row align-items-center justify-content-start">
						<div class="cart_bar_title_name">Product</div>
						<div class="cart_bar_title_content ml-auto">
							<div class="cart_bar_title_content_inner d-flex flex-row align-items-center justify-content-end">
								<div class="cart_bar_title_price">Price</div>
								<div class="cart_bar_title_quantity">Quantity</div>
								<div class="cart_bar_title_total">Total</div>
								<div class="cart_bar_title_button"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<form method="POST" action="{{ route('orders.update') }}">
                @csrf
                @method('PUT')
				<div class="row">
					<div class="col">
						<div class="cart_products">
							<ul>
								@if ($order)
									@foreach ($order->products as $product)
									<li class="product-{{ $product->id }} cart_product d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
										<!-- Product Image -->
										<div class="cart_product_image"><img src="theme/images/cart_product_1.jpg" alt=""></div>
										<!-- Product Name -->
										<div class="cart_product_name"><a href="product.html">{{ $product->name }}</a></div>
										<div class="cart_product_info ml-auto">
											<div class="cart_product_info_inner d-flex flex-row align-items-center justify-content-md-end justify-content-start">
												<!-- Product Price -->
												<div class="cart_product_price">${{ $product->price }}</div>
												<!-- Product Quantity -->
												<div class="product_quantity_container">
													<div class="product_quantity clearfix">
														<input id="quantity_input" type="text" pattern="[0-9]*" name="quantity" value="{{ $product->pivot->quantity }}">
														<div class="quantity_buttons">
															<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-caret-up" aria-hidden="true"></i></div>
															<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
														</div>
													</div>
												</div>
												<!-- Products Total Price -->
												<div class="cart_product_total">${{ $product->price * $product->pivot->quantity }}</div>
												<!-- Product Cart Trash Button -->
												<div class="cart_product_button">
													<button class="cart_product_remove" data-product-id="{{ $product->id }}"><img src="theme/images/trash.png" alt=""></button>
												</div>
											</div>
										</div>
									</li>
									@endforeach
								@endif
							
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<div class="cart_control_bar d-flex flex-md-row flex-column align-items-start justify-content-start">
							<button class="button_clear cart_button">clear cart</button>
							<button class="button_update cart_button">update cart</button>
							<button class="button_update cart_button_2 ml-md-auto">continue shopping</button>
						</div>
					</div>
				</div>
			</form>	
			<div class="row cart_extra">
				<!-- Cart Coupon -->
				<div class="col-lg-6">
					<div class="cart_coupon">
						<div class="cart_title">coupon code</div>
						<form action="#" class="cart_coupon_form d-flex flex-row align-items-start justify-content-start" id="cart_coupon_form">
							<input type="text" class="cart_coupon_input" placeholder="Coupon code" required="required">
							<button class="button_clear cart_button_2">apply coupon</button>
						</form>
					</div>
				</div>
				<!-- Cart Total -->
				<div class="col-lg-5 offset-lg-1">
					<div class="cart_total">
						<div class="cart_title">cart total</div>
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Subtotal</div>
								<div class="total-price cart_total_price ml-auto">${{ $order ? $order->total_price : 0}}</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Shipping</div>
								<div class="cart_total_price ml-auto">$5.00</div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Total</div>
								<div class="total-price cart_total_price ml-auto">${{ $order ? $order->total_price : 0 }}</div>
							</li>
						</ul>
						<button class="cart_total_button">proceed to checkout</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('js_cart')
<script src="theme/js/jquery-3.2.1.min.js"></script>
<script src="theme/styles/bootstrap4/popper.js"></script>
<script src="theme/styles/bootstrap4/bootstrap.min.js"></script>
<script src="theme/plugins/easing/easing.js"></script>
<script src="theme/plugins/parallax-js-master/parallax.min.js"></script>
<script src="theme/js/cart_custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.cart_product_remove').click(function() {
        	if(confirm('Delete this product, are you sure?')) {
	            var url = '/orders/delete';
	            var productId = $(this).data('product-id');
	            var data = {
	                'product_id': $(this).data('product-id')
	            };
	            
	            $.ajax({
	                url: url,
	                type: 'POST',
	                data: data,
	                success: function(result) {
	                    if(result.status) {
	                    	$('.product-' + productId).remove();
	                    	$('.total-price').text('$' + result.total_price)
	                    }
	            
	                },
	                error: function() {
	                    alert('Something went wrong!');
	                    // window.location.href = '/login';

	                    location.reload();
	                }
	            });
        	}
        });    
	});
</script>
@endsection