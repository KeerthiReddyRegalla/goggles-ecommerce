@extends('index')
@section('content')
    <!--/shop-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <!---728x90--->

            <div class="inner-sec-shop pt-lg-4 pt-3">
                <div class="row">
                    <div class="col-lg-4 single-right-left ">
                        <div class="grid images_3_of_2">
                            <div class="flexslider1">
                                <ul class="slides">
                                    @foreach(json_decode($product->images) as $image)
                                        <li data-thumb="{{ asset('admin/images/'.$image) }}">
                                            <div class="thumb-image"> <img src="{{ asset('admin/images/'.$image) }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                        <h3>{{ $product->title }}</h3>
                        <p><span class="item_price">${{ $product->discounted_price }}</span>
                            <del>${{ $product->price }}</del>
                        </p>
                        <div class="rating1">
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
                        <div class="color-quality">
                            <div class="color-quality-right">
                                <h5>Quality :</h5>
                                <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="5">5 Qty</option>
                                    <option value="6">6 Qty</option>
                                    <option value="7">7 Qty</option>
                                    <option value="8">10 Qty</option>
                                </select>
                            </div>
                        </div>
                        <div class="occasional">
                            <h5>Types :</h5>
                            <div class="colr ert">
                                <label class="radio"><input type="radio" name="radio" checked=""><i></i> Irayz Butterfly(Black)</label>
                            </div>
                            <div class="colr">
                                <label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (Grey)</label>
                            </div>
                            <div class="colr">
                                <label class="radio"><input type="radio" name="radio"><i></i> Irayz Butterfly (white)</label>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="occasion-cart">
                            <div class="googles single-item singlepage">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="googles_item" value="Farenheit">
                                    <input type="hidden" name="amount" value="575.00">
                                    <button type="submit" class="googles-cart pgoogles-cart">
                                        Add to Cart
                                    </button>

                                </form>

                            </div>
                        </div>
                        <ul class="footer-social text-left mt-lg-4 mt-3">
                            <li>Share On : </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                    <!--/tabs-->
                    <div class="responsive_tabs">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Description</li>
                                <li>Reviews</li>
                                <li>Information</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <!--/tab_one-->
                                <div class="tab1">

                                    <div class="single_page">
                                        <h6>{{ $product->title }}</h6>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                                <!--//tab_one-->
                                <div class="tab2">

                                    <div class="single_page">
                                        <div class="bootstrap-tab-text-grids">
                                            <div class="bootstrap-tab-text-grid">
                                                <div class="bootstrap-tab-text-grid-right">
                                                    <ul>
                                                        <li><a href="#">Zan Marker</a></li>
                                                        <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                                        quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                                        autem vel eum iure reprehenderit.</p>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab3">

                                    <div class="single_page">
                                        <h6>{{ $product->title }}</h6>
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//tabs-->

                </div>
            </div>
        </div>
        <!---728x90--->
        <div class="container-fluid">
            <!--/slide-->
            <div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
                <!--//banner-sec-->
                <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
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
            <!--//slider-->
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>

    <!-- FlexSlider -->
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
@endsection
