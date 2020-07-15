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
                            <a href="/products"><div class="home_slider_title">Clothers</div></a>
                        </div>  
                    </div>
                </div>
            </div>
            
            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        </div>
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
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name"><a href="/products/11">plaid sweater</a></div>
                                <div class="product_price">$110</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-lg-4 product_col">
                    <div class="product">
                        <div class="product_image">
                            <img src="theme/images/product_9.jpg" alt="">
                        </div>
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name"><a href="/products/6">Wedding Dress</a></div>
                                <div class="product_price">$90</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-lg-4 product_col">
                    <div class="product">
                        <div class="product_image">
                            <img src="theme/images/product_11.jpg" alt="">
                        </div>
                        <div class="product_content clearfix">
                            <div class="product_info">
                                <div class="product_name"><a href="/products/7">White Dress</a></div>
                                <div class="product_price">$30</div>
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
<script src="{{ asset('js/add_to_cart.js') }}"></script>

@endsection
