@extends('index')
@section('content')
    <!--checkout-->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <!---728x90--->
            <div class="inner-sec-shop px-lg-4 px-3">
                <h3 class="tittle-w3layouts my-lg-4 mt-3">Checkout </h3>
                <div class="checkout-right">
                    <h4>Your shopping cart contains:
                        <span>{{ count($products) }} Products</span>
                    </h4>
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Product Name</th>

                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $product)
                            <tr class="rem1">
                                <td class="invert">{{ $key + 1 }}</td>
                                <td class="invert-image">
                                    <a href="{{ route('single') }}">
                                        <img src="{{ asset('admin/images/'.$product->item->thumbnail_image) }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>{{ $product->quantity }}</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{ $product->item->title }}</td>

                                <td class="invert">${{ $product->item->discounted_price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="checkout-left row">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Continue to basket</h4>
                        <ul>
                            @php $total = 0.00; @endphp
                            @foreach($products as $key => $product)
                                <li>{{ $product->item->title }}
                                    <i>-</i>
                                    <span>${{ $product->item->discounted_price }}</span>
                                </li>
                                @php
                                    $total += $product->item->discounted_price;
                                @endphp
                            @endforeach
                            <li>Total
                                <i>-</i>
                                <span>${{ $total }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form">
                        <h4>Add a new Details</h4>
                        <form method="post" id="checkout-form" name="checkout-form" class="creditly-card-form agileinfo_form">
                            @csrf
                            <section class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <input type="hidden" name="items" value="{{ $products }}">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="full_name" placeholder="Full name" required>
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="tel" name="mobile" placeholder="Mobile number" required>
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Address: </label>
                                                    <input class="form-control" type="text" name="address" placeholder="Address" required>
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Town/City: </label>
                                            <input class="form-control" type="text" name="city" placeholder="Town/City" required>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-w3ls" name="address_type">
                                                <option value="office">Office</option>
                                                <option value="home">Home</option>
                                                <option value="commercial">Commercial</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="button" onclick="submitForm(event)" class="submit check_out">Delivery to this Address</button>
                                </div>
                            </section>
                        </form>
                        <div class="checkout-right-basket">
                            <a onclick="submitForm(event)">Make a Payment </a>
                        </div>
                    </div>

                    <div class="clearfix"> </div>

                </div>

            </div>
            <!---728x90--->
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

            $('form[id="checkout-form"]').validate({
                rules: {
                    full_name: {
                        required: true,
                    },
                    mobile: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        email: 'Enter a valid email'
                    },
                },
                submitHandler: function(form) {
                    $("input[name='business_phone']").val(business_phone.getNumber(intlTelInputUtils.numberFormat.E164));
                    form.submit();
                }
            });

            function submitForm(e){
                e.preventDefault();
                var form = document.forms.namedItem("checkout-form");
                var formData = new FormData(form);
                formData.append('total', '{{ $total }}');
                $.ajax({
                    type: 'POST',
                    url: '{{ route('orders.store')}}',
                    contentType: false,
                    processData: false,
                    data: formData,
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    success: function (xhr) {
                        window.location.href = "{{ route('payments.create') }}"+`?order=${xhr.data.id}&total=${xhr.data.total}`;
                    },

                    error: function (xhr){
                        console.log(xhr);
                    }
                });
            }
    </script>
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>
    <!--quantity-->
    <!--close-->
    <script>
        $(document).ready(function (c) {
            $('.close1').on('click', function (c) {
                $('.rem1').fadeOut('slow', function (c) {
                    $('.rem1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close2').on('click', function (c) {
                $('.rem2').fadeOut('slow', function (c) {
                    $('.rem2').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close3').on('click', function (c) {
                $('.rem3').fadeOut('slow', function (c) {
                    $('.rem3').remove();
                });
            });
        });
    </script>


    <!--//checkout-->
@endsection
