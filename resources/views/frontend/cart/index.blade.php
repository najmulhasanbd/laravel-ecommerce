@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Cart</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item">
                        <a class="page-item-link" href="http://127.0.0.1:8000">Home</a>
                    </li>
                    <li class="page-item">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->
    <!-- wish-list area start here  -->
    <div class="wish-list-area cart-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-12 wish-list-table">
                    <div class="table-responsive">
                        <div id="cardItem">
                            @php
                                $cart = session('cart', []);
                            @endphp

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody id="cart_ajax_load">
                                    @forelse($cart as $item)
                                        <tr class="cart-page-item">
                                            <td>
                                                <div class="single-grid-product m-0">
                                                    <div class="product-top">
                                                        <a href="#">
                                                            {{-- <img class="product-thumbnal"
                                                                src="{{ asset($item['thumbnail']) }}" alt="cart" /> --}}
                                                        </a>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <h3 class="product-name">
                                                            <a class="product-link" href="#">
                                                                {{ $item['name'] }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-price text-center">
                                                    @if (!empty($item['discounted_price']))
                                                        <h4 class="regular-price">${{ $item['price'] }}</h4>
                                                        <h3 class="price"><span
                                                                class="mainPrice">${{ $item['discounted_price'] }}</span>
                                                        </h3>
                                                    @else
                                                        <h3 class="price"><span
                                                                class="mainPrice">${{ $item['price'] }}</span></h3>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group" style="width:120px;">
                                                    <button type="button" class="btn btn-outline-secondary qty_decrease"
                                                        data-id="{{ $item['id'] }}">-</button>
                                                    <input type="text" class="form-control text-center qty_value"
                                                        value="{{ $item['quantity'] }}" readonly>
                                                    <button type="button" class="btn btn-outline-secondary qty_increase"
                                                        data-id="{{ $item['id'] }}">+</button>
                                                </div>
                                            </td>
                                            <td class="SubTotalAmount">$
                                                {{ ($item['discounted_price'] ?? $item['price']) * $item['quantity'] }}</td>
                                            <td>
                                                <button class="delet-btn deleteItemCart" title="Delete Item"
                                                    data-id="{{ $item['id'] }}">
                                                    <img src="{{ asset('frontend/assets/images/close.svg') }}"
                                                        alt="close" />
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Your cart is empty</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <div class="cart-summary mt-3">
                                <p><strong>Total Items:</strong> {{ array_sum(array_column($cart, 'quantity')) }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Page Bottom box area Start -->
            <div class="row cart-page-bottom-box-wrap">
                <!-- Cart page bottom box -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">

                </div>
                <!-- Cart page bottom box -->
                <!-- Cart page bottom box -->

                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-page-bottom-box cart-page-sub-total-box">
                        <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="bottom-box-title m-0">Subtotal:</h2>
                            <h2 class="bottom-box-title totalAmount m-0">$
                                {{ array_sum(array_map(fn($i) => ($i['discounted_price'] ?? $i['price']) * $i['quantity'], $cart)) }}
                            </h2>
                        </div>

                        <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                            <h2 class="bottom-box-title m-0">Total</h2>
                            <h2 class="bottom-box-title cart-page-final-total totalAmount m-0">
                                $
                                {{ array_sum(array_map(fn($i) => ($i['discounted_price'] ?? $i['price']) * $i['quantity'], $cart)) }}
                            </h2>
                        </div>

                        <div class="form-button text-center">
                            <a href="checkout.html" class="form-btn proceed-to-checkout-btn">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
                <!-- Cart page bottom box -->
            </div>
            <!-- Cart Page Bottom box area End -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).on('click', '.deleteItemCart', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var $row = $(this).closest('tr');

            $.ajax({
                url: "{{ route('cart.remove') }}",
                type: "POST",
                dataType: "json",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(response) {
                    if (response.status) {
                        // Row remove
                        $row.remove();

                        // Numbers
                        var total = parseFloat(response.cart_total || 0).toFixed(2);
                        var count = parseInt(response.cart_count || 0);

                        // Header count + totals
                        $(".totalCountItem, #cart-count").text(count);
                        $(".totalAmount, .cart-page-final-total").text("$ " + total);
                        $(".totalItemsCount").text(count);

                        // Empty state
                        if (count === 0) {
                            $("#cart_ajax_load").html(
                                '<tr><td colspan="5" class="text-center">Your cart is empty</td></tr>'
                            );
                        }
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            // প্রথমে সব previous click handlers remove করে দাও
            $(document).off('click', '.qty_increase, .qty_decrease');

            // এখন নতুন click handler bind করো
            $(document).on('click', '.qty_increase, .qty_decrease', function() {
                var $btn = $(this);
                var $row = $btn.closest('tr');
                var $input = $row.find('.qty_value');
                var qty = parseInt($input.val()) || 1;

                // 1 করে increment / decrement
                if ($btn.hasClass('qty_increase')) {
                    qty++;
                } else {
                    qty = Math.max(1, qty - 1);
                }

                // Ajax call
                $.post("{{ route('cart.update') }}", {
                    _token: "{{ csrf_token() }}",
                    id: $btn.data('id'),
                    quantity: qty
                }, function(res) {
                    if (res.status) {
                        $input.val(res.quantity);
                        $row.find('.SubTotalAmount').text("$ " + res.row_total.toFixed(2));
                        $(".totalAmount, .cart-page-final-total").text("$ " + res.cart_total
                            .toFixed(2));
                        $(".totalCountItem, #cart-count, .totalItemsCount").text(res.cart_count);
                    }
                }, 'json');
            });
        });
    </script>
@endsection
