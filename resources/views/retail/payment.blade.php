@extends('index')
@section('content')
    <!--Payment-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <!---728x90--->

            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 mt-3">Payment </h3>
                <!---728x90--->
                <!--/tabs-->
                <div class="responsive_tabs">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Cash on delivery (COD)</li>
                            <li class="{{ request()->route('token') ? 'resp-tab-active' : '' }}">Paypal Account</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <div class="tab1">
                                <div class="pay_info">
                                    <div class="vertical_post check_box_agile">
                                        <h5>COD</h5>
                                        <div class="checkbox">
                                            <div class="check_box_one cashon_delivery">
                                                <label class="anim">
                                                    <input type="checkbox" class="checkbox">
                                                    <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab4 {{ request()->route('token') ? 'resp-tab-content-active' : '' }}">
                                <div class="pay_info row">
                                    <div class="col-md-6 tab-grid">
                                        <img class="pp-img" src="{{ asset('assets/images/paypal.png') }}" alt="Image Alternative text" title="Image Title">
                                        <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                        <a class="btn btn-primary" href="javascript:$('#paypal_form').submit()">Checkout via Paypal</a>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ route('paypal.payment') }}" method="post" class="cc-form" id="paypal_form">
                                            @csrf
                                            <input type="hidden" name="total" value="{{  $total ?? '' }}">
                                            <input type="hidden" name="order" value="{{ $order ?? '' }}">
                                            <input class="btn btn-primary submit mt-4" type="submit" value="Proceed Payment {{ isset( $total ) ? $total : ''}}">
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
            </div>

        </div>
        <!-- //payment -->
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
    <!--//Payment-->
@endsection
