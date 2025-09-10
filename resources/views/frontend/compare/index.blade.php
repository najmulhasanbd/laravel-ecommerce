@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Compare</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                    <li class="page-item">Compare</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Compare-Area -->
    <section class="compare-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table_page table-responsive compare-table">
                        <div id="compareListTable">
                            <table class="table">
                                <tbody>

                                    {{-- Product Row --}}
                                    <tr>
                                        <td class="first-column">Product</td>
                                        @foreach ($compares as $item)
                                            <td class="product-col-{{ $item->id }} product-image-title">
                                                <div class="product-top">
                                                    <a href="#" class="image">
                                                        <img src="{{ asset($item->product->image ?? 'frontend/assets/images/products/tshirt.png') }}"
                                                            alt="Compare Product">
                                                    </a>
                                                </div>
                                                <div>
                                                    <h5>
                                                        <a href="#" class="title">
                                                            {{ $item->product->en_name ?? 'N/A' }}
                                                        </a>
                                                    </h5>
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>

                                    {{-- Description Row --}}
                                    <tr>
                                        <td class="first-column">Description</td>
                                        @foreach ($compares as $item)
                                            <td class="product-col-{{ $item->id }} pro-desc">
                                                <p>{{ $item->product->en_description ?? 'N/A' }}</p>
                                            </td>
                                        @endforeach
                                    </tr>

                                    {{-- Price Row --}}
                                    <tr>
                                        <td class="first-column">Price</td>
                                        @foreach ($compares as $item)
                                            <td class="product-col-{{ $item->id }} pro-price">
                                                $ {{ $item->product->discounted_price ?? $item->product->price }}
                                            </td>
                                        @endforeach
                                    </tr>

                                    {{-- Add To Cart Row --}}
                                    <tr>
                                        <td class="first-column">Add To Cart</td>
                                        @foreach ($compares as $item)
                                            <td class="product-col-{{ $item->id }} pro-addtocart">
                                                <a href="javascript:void(0)" title="Add To Cart"
                                                    data-id="{{ $item->id }}"
                                                    class="add-cart action-btn addCart primary-btn">
                                                    Add To Cart
                                                </a>
                                            </td>
                                        @endforeach
                                    </tr>

                                    {{-- Delete Row --}}
                                    <tr>
                                        <td class="first-column">Delete</td>
                                        @foreach ($compares as $item)
                                            <td class="product-col-{{ $item->id }} pro-remove">
                                                <button class="bg-transparent border-0 deleteCompareList"
                                                    data-id="{{ $item->id }}" title="Delete Item">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </td>
                                        @endforeach
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Toastr & jQuery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- Add To Cart Script --}}
    <script>
        $(document).on('click', '.addCart', function(e) {
            e.preventDefault();
            var productId = $(this).data('id');

            $.ajax({
                url: "{{ route('cart.add') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: productId
                },
                success: function(res) {
                    if (res.status === 'success') {
                        $('.totalCountItem').text(res.totalCount);
                        $('.totalAmount').text('$ ' + res.totalAmount);
                        toastr.options = {
                            "timeOut": 2000,
                            "progressBar": true,
                            "positionClass": "toast-top-right"
                        };
                        toastr.success(res.message);
                    } else {
                        toastr.error(res.message);
                    }
                }
            });
        });
    </script>

    {{-- Delete Compare Script --}}
    <script>
        $(document).on('click', '.deleteCompareList', function(e) {
            e.preventDefault();

            let id = $(this).data('id');

            if (confirm('Are you sure you want to remove this item?')) {
                $.ajax({
                    url: "{{ url('compares/remove') }}/" + id,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            // remove all columns related to that product
                            $(".product-col-" + id).remove();
                            toastr.success(response.message);
                        } else {
                            toastr.error("Something went wrong!");
                        }
                    }
                });
            }
        });
    </script>
@endsection
