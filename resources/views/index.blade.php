<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Goggles Ecommerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/style6.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/checkout.css') }}">
    <link href="{{ asset('assets/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" type="text/css" media="screen" />


    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}" type="text/css" media="all">
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
    <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
</head>

<body>
<script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
        }
    })();
</script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
        }
    })();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body>
<!-- New toolbar-->
<style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }


    #w3lDemoBar.w3l-demo-bar {
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        padding: 40px 5px;
        padding-top:70px;
        margin-bottom: 70px;
        background: #0D1326;
        border-top-left-radius: 9px;
        border-bottom-left-radius: 9px;
    }

    #w3lDemoBar.w3l-demo-bar a {
        display: block;
        color: #e6ebff;
        text-decoration: none;
        line-height: 24px;
        opacity: .6;
        margin-bottom: 20px;
        text-align: center;
    }

    #w3lDemoBar.w3l-demo-bar span.w3l-icon {
        display: block;
    }

    #w3lDemoBar.w3l-demo-bar a:hover {
        opacity: 1;
    }

    #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
        color: #e6ebff;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons {
        margin-top: 30px;
        border-top: 1px solid #41414d;
        padding-top: 40px;
    }
    #w3lDemoBar.w3l-demo-bar .demo-btns {
        border-top: 1px solid #41414d;
        padding-top: 30px;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
        font-size: 26px;
    }
    #w3lDemoBar.w3l-demo-bar .no-margin-bottom{
        margin-bottom:0;
    }
    .toggle-right-sidebar span {
        background: #0D1326;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: #e6ebff;
        border-radius: 50px;
        font-size: 26px;
        cursor: pointer;
        opacity: .5;
    }
    .pull-right {
        float: right;
        position: fixed;
        right: 0px;
        top: 70px;
        width: 90px;
        z-index: 99999;
        text-align: center;
    }
    /* ============================================================
    RIGHT SIDEBAR SECTION
    ============================================================ */

    #right-sidebar {
        width: 90px;
        position: fixed;
        height: 100%;
        z-index: 1000;
        right: 0px;
        top: 0;
        margin-top: 60px;
        -webkit-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        overflow-y: auto;
    }


    /* ============================================================
    RIGHT SIDEBAR TOGGLE SECTION
    ============================================================ */

    .hide-right-bar-notifications {
        margin-right: -300px !important;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }



    @media (max-width: 992px) {
        #w3lDemoBar.w3l-demo-bar a.desktop-mode{
            display: none;

        }
    }
    @media (max-width: 767px) {
        #w3lDemoBar.w3l-demo-bar a.tablet-mode{
            display: none;

        }
    }
    @media (max-width: 568px) {
        #w3lDemoBar.w3l-demo-bar a.mobile-mode{
            display: none;
        }
        #w3lDemoBar.w3l-demo-bar .responsive-icons {
            margin-top: 0px;
            border-top: none;
            padding-top: 0px;
        }
        #right-sidebar,.pull-right {
            width: 90px;
        }
        #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
            margin-bottom: 0;
        }
    }
</style>
<!-- start top-banner -->
@include('retail.layouts.top-banner')
<!-- end top-banner -->

@yield('content')

<!-- start footer -->
@include('retail.layouts.footer')
<!-- end footer -->

<!--jQuery-->
{{--<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<!-- newsletter modal -->
<!-- Modal -->

<!--search jQuery-->
<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('assets/js/classie-search.js') }}"></script>
<script src="{{ asset('assets/js/demo1-search.js') }}"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="{{ asset('assets/js/minicart.js') }}"></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!-- carousel -->
<script src="{{ asset('assets/js/easy-responsive-tabs.js') }}"></script>
<!-- Count-down -->
{{--<script src="{{ asset('assets/js/simplyCountdown.js') }}"></script>--}}
<link href="{{ asset('assets/css/simplyCountdown.css') }}" rel='stylesheet' type='text/css' />
<!--// Count-down -->
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>

<!-- //end-smooth-scrolling -->


<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<script src="{{ asset('assets/js/move-top.js') }}"></script>
<script src="{{ asset('assets/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->

<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<!-- js file -->

<script>(function(){var js = "window['__CF$cv$params']={r:'813bfb152f0dc908',t:'MTY5NjkxMDY4Mi45NzUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

</html>
