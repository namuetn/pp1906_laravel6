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
<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(theme/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(theme/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(theme/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="theme/images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Promo -->

	<div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">promo prices</div>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="theme/images/promo_1.jpg" alt="">
							<div class="promo_content promo_content_1">
								<div class="promo_title">-30% off</div>
								<div class="promo_subtitle">on all bags</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="theme/images/promo_2.jpg" alt="">
							<div class="promo_content promo_content_2">
								<div class="promo_title">-30% off</div>
								<div class="promo_subtitle">coats & jackets</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

				<!-- Promo Item -->
				<div class="col-lg-4 promo_col">
					<div class="promo_item">
						<div class="promo_image">
							<img src="theme/images/promo_3.jpg" alt="">
							<div class="promo_content promo_content_3">
								<div class="promo_title">-25% off</div>
								<div class="promo_subtitle">on Sandals</div>
							</div>
						</div>
						<div class="promo_link"><a href="#">Shop Now</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">new arrivals</div>
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="theme/images/product_1.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Woman's Long Dress</a></div>
								<div class="product_price">$45.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="theme/images/shopping-bag-white.svg" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="theme/images/product_2.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">2 Piece Swimsuit</a></div>
								<div class="product_price">$35.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="theme/images/shopping-bag-white.svg" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="theme/images/product_3.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="product.html">Man Blue Jacket</a></div>
								<div class="product_price">$145.00</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><img src="theme/images/shopping-bag-white.svg" alt=""></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra clearfix">
		<div class="extra_promo extra_promo_1">
			<div class="extra_promo_image" style="background-image:url(theme/images/extra_1.jpg)"></div>
			<div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_1_price">30%<span>off</span></div>
				<div class="extra_1_title">On all shoes</div>
				<div class="extra_1_text">*Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra.</div>
				<div class="button extra_1_button"><a href="checkout.html">check out</a></div>
			</div>
		</div>
		<div class="extra_promo extra_promo_2">
			<div class="extra_promo_image" style="background-image:url(theme/images/extra_2.jpg)"></div>
			<div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_2_title">
					<div class="extra_2_center">&</div>
					<div class="extra_2_top">Mix</div>
					<div class="extra_2_bottom">Match</div>
				</div>
				<div class="extra_2_text">*Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra.</div>
				<div class="button extra_2_button"><a href="checkout.html">check out</a></div>
			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(theme/images/gallery.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="#">#wish</a></li>
							<li><a href="#">#wishinstagram</a></li>
							<li><a href="#">#wishgirl</a></li>
						</ul>
					</div>
					<div class="gallery_text text-center">*Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra.</div>
					<div class="button gallery_button"><a href="#">submit</a></div>
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<img src="theme/images/gallery_1.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<img src="theme/images/gallery_2.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<img src="theme/images/gallery_3.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<img src="theme/images/gallery_4.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<img src="theme/images/gallery_5.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_6.jpg">
						<img src="theme/images/gallery_6.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">testimonials</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="theme/images/testimonials.jpg" alt=""></div>
								<div class="test_name">Christinne Smith</div>
								<div class="test_title">client</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="theme/images/testimonials.jpg" alt=""></div>
								<div class="test_name">Christinne Smith</div>
								<div class="test_title">client</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="theme/images/testimonials.jpg" alt=""></div>
								<div class="test_name">Christinne Smith</div>
								<div class="test_title">client</div>
							</div>
						</div>

					</div>

				</div>
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