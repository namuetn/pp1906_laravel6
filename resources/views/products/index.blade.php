@extends('master_shop')

@section('css_category')
<link rel="stylesheet" type="text/css" href="theme/styles/bootstrap4/bootstrap.min.css">
<link href="theme/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="theme/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="theme/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="theme/styles/categories.css">
<link rel="stylesheet" type="text/css" href="theme/styles/categories_responsive.css">
@endsection

@section('content')
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="theme/images/categories.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Woman</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li>Woman</li>
									<li>Accessories</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<!-- Sidebar Left -->

					<div class="sidebar_left clearfix">

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_section_content">
								<ul>
									<li><a href="#">Wedding Dresses (23)</a></li>
									<li><a href="#">Swimsuits (11)</a></li>
									<li><a href="#">Jeans (61)</a></li>
									<li><a href="#">Tops (34)</a></li>
								</ul>
							</div>
						</div>
						
						<!-- Color -->
						<div class="sidebar_section">
							<div class="sidebar_title">Color</div>
							<div class="sidebar_section_content sidebar_color_content mCustomScrollbar" data-mcs-theme="minimal-dark">
								<ul>
									<li><a href="#"><span style="background:#a3ccff"></span>Blue (23)</a></li>
									<li><a href="#"><span style="background:#937c6f"></span>Brown (11)</a></li>
									<li><a href="#"><span style="background:#000000"></span>Black (61)</a></li>
									<li><a href="#"><span style="background:#ff5c00"></span>Orange (34)</a></li>
									<li><a href="#"><span style="background:#a3ffb2"></span>Green (17)</a></li>
									<li><a href="#"><span style="background:#f52832"></span>Red (22)</a></li>
									<li><a href="#"><span style="background:#fdabf4"></span>Pink (7)</a></li>
									<li><a href="#"><span style="background:#ecf863"></span>Yellow (13)</a></li>
								</ul>
							</div>
						</div>

						<!-- Size -->
						<div class="sidebar_section">
							<div class="sidebar_title">Size</div>
							<div class="sidebar_section_content">
								<ul>
									<li><a href="#">Small S (23)</a></li>
									<li><a href="#">Medium M (11)</a></li>
									<li><a href="#">Large L (61)</a></li>
									<li><a href="#">Extra Large XL (34)</a></li>
								</ul>
							</div>
						</div>

						<!-- Price -->
						<div class="sidebar_section">
							<div class="sidebar_title">Price</div>
							<div class="sidebar_section_content">
								<div class="filter_price">
									<div id="slider-range" class="slider_range"></div>
									<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
									<div class="clear_price_btn">Clear Price</div>
								</div>
							</div>
						</div>

						<!-- Best Sellers -->

						<div class="sidebar_section">
							<div class="sidebar_title">Best Sellers</div>
							<div class="sidebar_section_content bestsellers_content">
								<ul>
									<!-- Best Seller Item -->
									<li class="clearfix">
										<div class="best_image"><img src="theme/images/best_1.jpg" alt=""></div>
										<div class="best_content">
											<div class="best_title"><a href="product.html">Blue dress with dots</a></div>
											<div class="best_price">$45</div>
										</div>
										<div class="best_buy">+</div>
									</li>

									<!-- Best Seller Item -->
									<li class="clearfix">
										<div class="best_image"><img src="theme/images/best_2.jpg" alt=""></div>
										<div class="best_content">
											<div class="best_title"><a href="product.html">White t-shirt</a></div>
											<div class="best_price">$45</div>
										</div>
										<div class="best_buy">+</div>
									</li>

									<!-- Best Seller Item -->
									<li class="clearfix">
										<div class="best_image"><img src="theme/images/best_3.jpg" alt=""></div>
										<div class="best_content">
											<div class="best_title"><a href="product.html">Blue dress with dots</a></div>
											<div class="best_price">$45</div>
										</div>
										<div class="best_buy">+</div>
									</li>

									<!-- Best Seller Item -->
									<li class="clearfix">
										<div class="best_image"><img src="theme/images/best_4.jpg" alt=""></div>
										<div class="best_content">
											<div class="best_title"><a href="product.html">White t-shirt</a></div>
											<div class="best_price">$45</div>
										</div>
										<div class="best_buy">+</div>
									</li>

								</ul>
							</div>
						</div>

						<!-- Size -->
						<div class="sidebar_section sidebar_options">
							<div class="sidebar_section_content">

								<!-- Option Item -->
								<div class="sidebar_option d-flex flex-row align-items-center justify-content-start">
									<div class="option_image"><img src="theme/images/option_1.png" alt=""></div>
									<div class="option_content">
										<div class="option_title">30 Days Returns</div>
										<div class="option_subtitle">No questions asked</div>
									</div>
								</div>

								<!-- Option Item -->
								<div class="sidebar_option d-flex flex-row align-items-center justify-content-start">
									<div class="option_image"><img src="theme/images/option_2.png" alt=""></div>
									<div class="option_content">
										<div class="option_title">Free Delivery</div>
										<div class="option_subtitle">On all orders</div>
									</div>
								</div>

								<!-- Option Item -->
								<div class="sidebar_option d-flex flex-row align-items-center justify-content-start">
									<div class="option_image"><img src="theme/images/option_3.png" alt=""></div>
									<div class="option_content">
										<div class="option_title">Secure Payments</div>
										<div class="option_subtitle">No need to worry</div>
									</div>
								</div>

								<!-- Option Item -->
								<div class="sidebar_option d-flex flex-row align-items-center justify-content-start">
									<div class="option_image"><img src="theme/images/option_4.png" alt=""></div>
									<div class="option_content">
										<div class="option_title">24/7 Support</div>
										<div class="option_subtitle">Just call us</div>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="current_page">Woman's Fashion</div>
				</div>
				<div class="col-12">
					<div class="product_sorting clearfix">
						<div class="view">
							<div class="view_box box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
							<div class="view_box detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
						<div class="sorting">
							<ul class="item_sorting">
								<li>
									<span class="sorting_text">Show all</span>
									<i class="fa fa-caret-down" aria-hidden="true"></i>
									<ul>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
										<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Stars</span></li>
									</ul>
								</li>
								<li>
									<span class="sorting_text">Show</span>
									<span class="num_sorting_text">12</span>
									<i class="fa fa-caret-down" aria-hidden="true"></i>
									<ul>
										<li class="num_sorting_btn"><span>3</span></li>
										<li class="num_sorting_btn"><span>6</span></li>
										<li class="num_sorting_btn"><span>12</span></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row products_container">
				<div class="col">
					
					<!-- Products -->

					<div class="product_grid">

						<!-- Product -->
						@foreach($products as $product)
						<div class="product">
							<div class="product_image"><img src="theme/images/product_1.jpg" alt=""></div>
							<div class="rating rating_4" data-rating="4">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="product_content clearfix">
								
									<div class="product_info">
										<div class="product_name"><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></div>
										<div class="product_price">{{ $product->price }}</div>
									</div>
								
								<div class="product_options">
									<div class="product_buy product_option" data-product-id="{{ $product->id }}"><img src="theme/images/shopping-bag-white.svg" alt=""></div>
									<div class="product_fav product_option">+</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
					
			</div>
			@include('layouts_wish.includes.paginate')
			<div>{{ $products->links('vendor.pagination.bootstrap-4') }}</div>

		</div>
		
		<!-- Sidebar Right -->

		<div class="sidebar_right clearfix">

			<!-- Promo 1 -->
			<div class="sidebar_promo_1 sidebar_promo d-flex flex-column align-items-center justify-content-center">
				<div class="sidebar_promo_image" style="background-image: url(theme/images/sidebar_promo_1.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>

			<!-- Promo 2 -->
			<div class="sidebar_promo_2 sidebar_promo">
				<div class="sidebar_promo_image" style="background-image: url(theme/images/sidebar_promo_2.jpg)"></div>
				<div class="sidebar_promo_content text-center">
					<div class="sidebar_promo_title">30%<span>off</span></div>
					<div class="sidebar_promo_subtitle">On all shoes</div>
					<div class="sidebar_promo_button"><a href="checkout.html">check out</a></div>
				</div>
			</div>
		</div>

	</div>
	

@endsection

@section('js_category')
<script src="theme/js/jquery-3.2.1.min.js"></script>
<script src="theme/styles/bootstrap4/popper.js"></script>
<script src="theme/styles/bootstrap4/bootstrap.min.js"></script>
<script src="theme/plugins/easing/easing.js"></script>
<script src="theme/plugins/parallax-js-master/parallax.min.js"></script>
<script src="theme/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="theme/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
<script src="theme/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="theme/js/categories_custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.product_buy').click(function() {
           
            var url = '/orders';
            var data = {
                'product_id': $(this).data('product-id')
            };
            
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(result) {
                    $('.cart_num').text(result.quantity);
                    alert('Order success!');
                },
                error: function() {
                    alert('Please login before order');
                    window.location.href = '/login';

                   // location.reload();
                }
            });
        });    
	});
</script>
@endsection 
	