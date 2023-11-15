@extends('index')
@section('content')
    <!--/shop-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <!---728x90--->

            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
                <!---728x90--->
                <div class="row">
                    <!-- product left -->
                    <div class="side-bar col-lg-3">
                        <!-- reviews -->
                        <div class="customer-rev left-side">
                            <h3 class="agileits-sear-head">Customer Review</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span>5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>3.5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <span>2.5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //reviews -->
                        <!-- deals -->
                        <div class="deal-leftmk left-side">
                            <h3 class="agileits-sear-head">Special Deals</h3>
                            <div class="special-sec1">
                                <div class="img-deals">
                                    <img src="{{ asset('assets/images/s1.jpg') }}" alt="">
                                </div>
                                <div class="img-deal1">
                                    <h3>Farenheit (Grey)</h3>
                                    <a href="{{ route('single') }}">$575.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img src="{{ asset('assets/images/s2.jpg') }}" alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Opium (Grey)</h3>
                                    <a href="{{ route('single') }}">$325.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img src="{{ asset('assets/images/m2.jpg') }}" alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Azmani Round</h3>
                                    <a href="{{ route('single') }}">$725.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="special-sec1">
                                <div class="col-xs-4 img-deals">
                                    <img src="{{ asset('assets/images/m4.jpg') }}" alt="">
                                </div>
                                <div class="col-xs-8 img-deal1">
                                    <h3>Farenheit Oval</h3>
                                    <a href="{{ route('single') }}">$325.00</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- //deals -->
                    </div>
                    <!-- //product left -->
                    <!--/product right-->
                    <div class="left-ads-display col-lg-9">
                        <div class="wrapper_top_shop">
                            <div class="row">
                                <div class="col-md-6 shop_left">
                                    <img src="{{ asset('assets/images/banner3.jpg') }}" alt="">
                                    <h6>40% off</h6>
                                </div>
                                <div class="col-md-6 shop_right">
                                    <img src="{{ asset('assets/images/banner4.jpg') }}" alt="">
                                    <h6>50% off</h6>
                                </div>

                            </div>
                            @php
                                $products =  \App\Services\DB\ProductService::query()->get();
                            @endphp

                            @foreach($products as $product)
                            @endforeach
                            <div class="row">
                                <!-- /women's -->
                                @foreach($products as $product)
                                    <div class="col-md-3 product-men women_two shop-gd mb-3">
                                        <div class="product-googles-info googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('admin/images/'.$product->thumbnail_image) }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('products.show', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">
                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">{{ $product->title }}</a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">${{ $product->discounted_price }}</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                @for($i = 0; $i < $product->rating; $i++)
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                                        </a>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="{{ $product->title }}">
                                                                <input type="hidden" name="amount" value="{{ $product->discounted_price }}">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--//product right-->
                </div>
                <!--/slide-->
                <!---728x90--->
                <div class="slider-img mid-sec mt-lg-5 mt-2">
                    <!--//banner-sec-->
                    <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
                    <div class="mid-slider">
                        <div class="owl-carousel owl-theme row">
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s5.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">Fastrack Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$325.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="Fastrack Aviator">
                                                                <input type="hidden" name="amount" value="325.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>

                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s6.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">MARTIN Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$425.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="MARTIN Aviator">
                                                                <input type="hidden" name="amount" value="425.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s7.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">Royal Son Aviator </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$425.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="Royal Son Aviator">
                                                                <input type="hidden" name="amount" value="425.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s8.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">Irayz Butterfly </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$281.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="Irayz Butterfly">
                                                                <input type="hidden" name="amount" value="281.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s9.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">Jerry Rectangular </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$525.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="Jerry Rectangular ">
                                                                <input type="hidden" name="amount" value="525.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="gd-box-info text-center">
                                    <div class="product-men women_two bot-gd">
                                        <div class="product-googles-info slide-img googles">
                                            <div class="men-pro-item">
                                                <div class="men-thumb-item">
                                                    <img src="{{ asset('assets/images/s10.jpg') }}" class="img-fluid" alt="">
                                                    <div class="men-cart-pro">
                                                        <div class="inner-men-cart-pro">
                                                            <a href="{{ route('single') }}" class="link-product-add-cart">Quick View</a>
                                                        </div>
                                                    </div>
                                                    <span class="product-new-top">New</span>
                                                </div>
                                                <div class="item-info-product">

                                                    <div class="info-product-price">
                                                        <div class="grid_meta">
                                                            <div class="product_price">
                                                                <h4>
                                                                    <a href="{{ route('single') }}">Herdy Wayfarer </a>
                                                                </h4>
                                                                <div class="grid-price mt-2">
                                                                    <span class="money ">$325.00</span>
                                                                </div>
                                                            </div>
                                                            <ul class="stars">
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="googles single-item hvr-outline-out">
                                                            <form action="#" method="post">
                                                                <input type="hidden" name="cmd" value="_cart">
                                                                <input type="hidden" name="add" value="1">
                                                                <input type="hidden" name="googles_item" value="Herdy Wayfarer">
                                                                <input type="hidden" name="amount" value="325.00">
                                                                <button type="submit" class="googles-cart pgoogles-cart">
                                                                    <i class="fas fa-cart-plus"></i>
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//slider-->
            </div>
        </div>
    </section>
@endsection
