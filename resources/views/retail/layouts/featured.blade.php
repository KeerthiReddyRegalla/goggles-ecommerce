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
