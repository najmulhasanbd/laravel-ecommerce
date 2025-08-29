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
                                                <div class="cart-quantity input-group">
                                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                                        data-id="{{ $item['id'] }}">-</div>
                                                    <input class="qty-input cart-plus-minus-box qty_value" type="text"
                                                        value="{{ $item['quantity'] }}" readonly />
                                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                                        data-id="{{ $item['id'] }}">+</div>
                                                </div>
                                            </td>
                                            <td>
                                                <h1 class="cart-table-item-total SubTotalAmount">
                                                    $
                                                    {{ ($item['discounted_price'] ?? $item['price']) * $item['quantity'] }}
                                                </h1>
                                            </td>
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
        $(document).on('click', '.qty_increase, .qty_decrease', function(e) {
            e.preventDefault();

            var id = $(this).data('id');
            var $row = $(this).closest('tr');
            var $input = $row.find(".qty_value");
            var qty = parseInt($input.val());

            if ($(this).hasClass('qty_increase')) {
                qty++;
            } else {
                qty = qty > 1 ? qty - 1 : 1; // 1 এর নিচে নামতে দিবে না
            }

            $.ajax({
                url: "{{ route('cart.update') }}",
                type: "POST",
                dataType: "json",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    quantity: qty
                },
                success: function(response) {
                    if (response.status) {
                        // Update quantity box
                        $input.val(response.quantity);

                        // Update row subtotal
                        $row.find(".SubTotalAmount").text("$ " + response.row_total.toFixed(2));

                        // Update total count & total amount
                        $(".totalCountItem, #cart-count").text(response.cart_count);
                        $(".totalAmount, .cart-page-final-total").text("$ " + response.cart_total
                            .toFixed(2));
                        $(".totalItemsCount").text(response.cart_count);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
