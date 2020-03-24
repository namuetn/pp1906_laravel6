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
								@foreach($categories as $category)									
									<li><a style="cursor: pointer;" class="category-button" data-category-id="{{$category->id}}">{{$category->name}}</a></li>
								@endforeach
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

					</div>

					<div class="current_page">Woman's Fashion</div>
				</div>
				<div class="col-12">
					<div class="product_sorting clearfix">
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
							<div class="product_image">
								@if( $product->image)
								
                                    <a href="{{ route('products.show', $product->id) }}" class="img-prod"><img class="img-fluid" src=" {{ asset(config('product.image_path') . $product->image) }}" alt="{{ $product->image }}">
                                @else    
                                    <a href="#" class="img-prod"><img class="img-fluid" src="theme/images/product_2.jpg" alt="{{ $product->image }}">
                                @endif
							</div>
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
										<div class="product_price">${{ $product->price }}</div>
									</div>
								
								<div class="product_options">
									<div class="product_buy product_option" data-product-id="{{ $product->id }}"><img src="theme/images/shopping-bag-white.svg" alt=""></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
					
			</div>
			<div>{{ $products->links('vendor.pagination.bootstrap-4') }}</div>

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
<script src="{{ asset('js/add_to_cart.js') }}"></script>
<script src="{{ asset('js/ajax_category.js') }}"></script>
@endsection 
	