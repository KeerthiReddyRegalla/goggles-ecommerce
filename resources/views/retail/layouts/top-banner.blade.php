<div class="banner-top container-fluid" id="home">
    <!-- header -->
    <header>
        <div class="row">
            <div class="col-md-3 top-info text-left mt-lg-4">
                <h6>Need Help</h6>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i> Call</li>
                    <li class="number-phone mt-3">12345678099</li>
                </ul>
            </div>
            <div class="col-md-6 logo-w3layouts text-center">
                <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        Goggles </a>
                </h1>
            </div>

            <div class="col-md-3 top-info-cart text-right mt-lg-4">
                <ul class="cart-inner-info">
                    <li>
                        @if(auth()->user())
                            <a class="btn-open" href="{{ route('admin.dashboard') }}">
                                <span class="fa fa-user text-dark" aria-hidden="true"></span>
                            </a>
                        @else
                            <a class="btn-open" href="{{ route('login') }}">
                                <span class="fa fa-user text-dark" aria-hidden="true"></span>
                            </a>
                        @endif
                    </li>
                    <li class="galssescart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_googles_cart" type="submit" name="submit" value="">
                                My Cart
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <!---->
                <div class="overlay-login text-left">
                    <button type="button" class="overlay-close1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="wrap">
                       @include('retail.components.login')
                        <!---->
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <div class="search">
            <div class="mobile-nav-button">
                <button id="trigger-overlay" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <!-- open/close -->
            <div class="overlay overlay-door">
                <button type="button" class="overlay-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </button>
                <form action="#" method="post" class="d-flex">
                    <input class="form-control" type="search" placeholder="Search here..." required="">
                    <button type="submit" class="btn btn-primary submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

            </div>
            <!-- open/close -->
        </div>
        <label class="top-log mx-auto"></label>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-lg-0" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Features
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Top Featured </h5>
                                        <ul>
                                            <li class="media-mini mt-3">
                                                <a href="{{ route('shop') }}">Designer Glasses</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('shop') }}"> Ray-Ban</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Prescription Glasses</a>
                                            </li>
                                            <li class="mt-3">
                                                <h5>View more pages</h5>
                                            </li>
                                            <li class="mt-2">
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('customer') }}">Customers</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Prescriptions </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('shop') }}">
                                                <img src="{{ asset('assets/images/g2.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub">Designer </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('shop') }}">
                                                <img src="{{ asset('assets/images/g3.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('shop') }}" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu mega-menu ">
                            <li>
                                <div class="row">
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Top Selling</h5>
                                        <ul>
                                            <li class="media-mini mt-3">
                                                <a href="{{ route('shop') }}">Designer Glasses</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('shop') }}"> Ray-Ban</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Prescription Glasses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Rx Sunglasses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Contact Lenses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Multifocal Glasses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Kids Glasses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Lightweight Glasses</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Sports Glasses</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">
                                        <h5 class="tittle-w3layouts-sub"> Others </h5>
                                        <ul>
                                            <li class="media-mini mt-3">

                                                <a href="{{ route('shop') }}">Brooks Brothers</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Persol</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Polo Ralph Lauren</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Prada</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Ray-Ban Jr</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Sferoflex</a>
                                            </li>
                                        </ul>
                                        <ul class="sub-in text-left">

                                            <li>
                                                <a href="{{ route('shop') }}">Polo Ralph Lauren</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Prada</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop') }}">Ray-Ban Jr</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-4 media-list span4 text-left">

                                        <h5 class="tittle-w3layouts-sub-nav">Stylish </h5>
                                        <div class="media-mini mt-3">
                                            <a href="{{ route('shop') }}">
                                                <img src="{{ asset('assets/images/g1.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption text-center">
                        <h3>Men’s eyewear
                            <span>Cool summer sale 50% off</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption text-center">
                        <h3>Women’s eyewear
                            <span>Want to Look Your Best?</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="carousel-caption text-center">
                        <h3>Men’s eyewear
                            <span>Cool summer sale 50% off</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="carousel-caption text-center">
                        <h3>Women’s eyewear
                            <span>Want to Look Your Best?</span>
                        </h3>
                        <a href="{{ route('shop') }}" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--//banner -->
    </div>
</div>
