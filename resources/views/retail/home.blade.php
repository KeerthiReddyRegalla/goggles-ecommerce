@extends('index')
@section('content')
    <!--//banner-sec-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container-fluid">
            <div class="inner-sec-shop px-lg-4 px-3">
                <!---728x90--->

                <h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
                <!---728x90--->
                <div class="row">
                    <!-- /womens -->
                    @php
                       $products =  \App\Services\DB\ProductService::query()->take(8)->get();
                    @endphp

                    @foreach($products as $product)
                        <div class="col-md-3 product-men women_two mb-2">
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
                                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
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
                <!--//row-->
                <!--/meddle-->
                <div class="row">
                    <div class="col-md-12 middle-slider my-4">
                        <div class="middle-text-info ">

                            <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
                            <div class="simply-countdown-custom" id="simply-countdown-custom"></div>

                        </div>
                    </div>
                </div>
                <!--//meddle-->
                <!---728x90--->
                <!--/slide-->
                <div class="slider-img mid-sec">
                    <!--//banner-sec-->
                    <div class="mid-slider">
                        <div class="owl-carousel owl-theme row">
                            @php
                                $products =  \App\Services\DB\ProductService::query()->orderBy('created_at', 'desc')->take(8)->get();
                            @endphp

                            @foreach($products as $product)
                                <div class="item">
                                    <div class="gd-box-info text-center">
                                        <div class="product-men women_two bot-gd">
                                            <div class="product-googles-info slide-img googles">
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
                                                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /testimonials -->
                <div class="testimonials py-lg-4 py-3 mt-4">
                    <div class="testimonials-inner py-lg-4 py-3">
                        <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="testimonials_grid text-center">
                                        <h3>Anamaria
                                            <span>Customer</span>
                                        </h3>
                                        <label>United States</label>
                                        <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                            Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials_grid text-center">
                                        <h3>Esmeralda
                                            <span>Customer</span>
                                        </h3>
                                        <label>United States</label>
                                        <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                            Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonials_grid text-center">
                                        <h3>Gretchen
                                            <span>Customer</span>
                                        </h3>
                                        <label>United States</label>
                                        <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                            Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                                    </div>
                                </div>
                                <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="fas fa-long-arrow-alt-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //testimonials -->
                <div class="row galsses-grids pt-lg-5 pt-3">
                    <div class="col-lg-6 galsses-grid-left">
                        <figure class="effect-lexi">
                            <img src="{{ asset('assets/images/banner4.jpg') }}" alt="" class="img-fluid">
                            <figcaption>
                                <h3>Editor's
                                    <span>Pick</span>
                                </h3>
                                <p> Express your style now.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 galsses-grid-left">
                        <figure class="effect-lexi">
                            <img src="{{ asset('assets/images/banner1.jpg') }}" alt="" class="img-fluid">
                            <figcaption>
                                <h3>Editor's
                                    <span>Pick</span>
                                </h3>
                                <p>Express your style now.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- /grids -->
                <div class="bottom-sub-grid-content py-lg-5 py-3">
                    <div class="row">
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">

                                <span class="far fa-hand-paper"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            <p>
                                <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">
                                <span class="fas fa-rocket"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            <p>
                                <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-4 bottom-sub-grid text-center">
                            <div class="bt-icon">
                                <span class="far fa-sun"></span>
                            </div>

                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            <p>
                                <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                            </p>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                </div>
                <!-- //grids -->
                <!-- /clients-sec -->
                <div class="testimonials p-lg-5 p-3 mt-4">
                    <div class="row last-section">
                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                            <div class="mail-grid-icon text-center">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="mail-grid-text-info">
                                <h3>Genuine Product</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                            <div class="mail-grid-icon text-center">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="mail-grid-text-info">
                                <h3>Secure Products</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                            <div class="mail-grid-icon text-center">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="mail-grid-text-info">
                                <h3>Cash on Delivery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">
                            <div class="mail-grid-icon text-center">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="mail-grid-text-info">
                                <h3>Easy Delivery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //clients-sec -->
            </div>
        </div>
    </section>
@endsection
