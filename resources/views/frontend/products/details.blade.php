@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">
                    Shop
                </h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="page-item">
                        Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- product-single-area start here  -->
    <div class="product-single-area section-top">
        <div class="container">
            <div class="product-single-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-single-left">
                            <div class="product-thumbnail-image">
                                <ul class="product-thumb-silide slider slider-nav">
                                    @foreach ($productImage as $data)
                                        <li class="single-item"><img class="single-item-image"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" /></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="product-slier-big-image">
                                <div class="product-priview-slide slider slider-for">
                                    @foreach ($productImage as $data)
                                        <div class="single-slide">
                                            <img class="slide-image"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" />
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-single-right">
                            <div class="product-info">
                                <h4 class="product-catagory">{{ ucwords($details->category->en_category_name) }}</h4>

                                <h3 class="product-name">{{ $details->en_name }}</h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>

                                <div class="product-price">
                                    <span class="price">$ {{ $details->discounted_price }}</span>
                                    <span class="regular-price">$ {{ $details->price }}</span>
                                </div>
                                <div class="product-color-area">
                                    <div class="variable-single-item color-switch">
                                        <div class="product-variable-color">
                                            <label>
                                                <input type="hidden" name="colorId" value="1">
                                                <input name="productColor" class="color-select" type="radio"
                                                    value="1">
                                                <span style="background:#FF0000;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-size-area">
                                    <h4 class="size-title">Type: Physical
                                    </h4>
                                    <ul class="size-switch">
                                        <input type="hidden" class="sizeValue" name="productSize" value="1">
                                        <li class="single-size activeSize" data-size="1">
                                            S</li>
                                    </ul>
                                </div>

                                <div class="prdouct-btn-wrapper d-flex align-items-center">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton btn">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            id="product_quantity" value="1" readonly />
                                        <div class="inc qtybutton btn">+</div>
                                    </div>
                                    <a class="product-btn MyWishList" data-id="5" title="Add To Wishlist"><i
                                            class="icon flaticon-like"></i></a>
                                    <a class="product-btn CompareList" data-id="5" title="Add To Compare"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </div>
                                <div class="product-bottom-button d-flex">
                                    <a href="javascript:void(0)" class="primary-btn buyNow" data-id="5">Buy Now</a>
                                    <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                        data-id="{{ $details->id }}">Add To Cart
                                        <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                            <div class="product-right-bottom">
                                <ul class="features">
                                    <li class="single-feature"><img class="icon"
                                            src="{{ asset('frontend') }}/assets/images/delivery-van-icon.svg"
                                            alt="icon" /><strong class="feature-title">Estimated
                                            Delivery:</strong><span class="feature-text">7
                                            days</span></li>
                                    <li class="single-feature"><img class="icon"
                                            src="{{ asset('frontend') }}/assets/images/shipping-return.svg"
                                            alt="icon" /><strong class="feature-title">Shipping Charge:</strong><span
                                            class="feature-text">
                                            $ 60

                                        </span>
                                    </li>
                                </ul>

                                <div class="guarantee-checkout-area">
                                    <h3 class="guarantee-title">Guarantee safe &amp; secure checkout</h3>
                                    <img src="{{ asset('frontend') }}/assets/images/we_accept.webp"
                                        alt="payment-method-image" />
                                </div>

                                <div class="share-area mt-30">
                                    <h3 class="share-title">SHARE:</h3>
                                    <ul class="social-media a2a_kit">
                                        <li class="media-item"><a class="media-link facebook a2a_button_facebook"
                                                href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="media-item"><a class="media-link twitter a2a_button_twitter"
                                                href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li class="media-item"><a class="media-link linkedin a2a_button_linkedin"
                                                href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="media-item"><a class="media-link pinterest a2a_button_pinterest"
                                                href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-bottom-info mt-50">
                <div class="nav-tabs-menu">
                    <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                data-bs-target="#Description" type="button" role="tab" aria-controls="Description"
                                aria-selected="true">
                                Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews"
                                type="button" role="tab" aria-controls="Reviews" aria-selected="false">
                                Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab"
                                data-bs-target="#Shipping-Return" type="button" role="tab"
                                aria-controls="Shipping-Return" aria-selected="false">
                                Shipping &amp; Return</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab"
                                data-bs-target="#Additional-Information" type="button" role="tab"
                                aria-controls="Additional-Information" aria-selected="false">
                                Additional Information</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="ProductTabContent">

                    <div class="tab-pane fade show active" id="Description" role="tabpanel"
                        aria-labelledby="Description-tab">
                        <div class="product-description">
                            <p class="description-text">{!! $details->en_description !!}</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        <div class="product-reviews">
                            <div class="review-top">
                                <div class="review-top-left">
                                    <span class="review-point">0</span>
                                    <!-- This is server side code. User can not modify it. -->
                                    <ul class="product-review">
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <span class="review-count">0
                                        Reviews</span>
                                </div>
                            </div>

                            <div class="reviews-list">
                                <h1>No Review Yet!</h1>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Shipping-Return" role="tabpanel"
                        aria-labelledby="Shipping-Return-tab">
                        <div class="shipping-return-area">
                            <p class="return-text">{{ $details->en_shipping }}</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Additional-Information" role="tabpanel"
                        aria-labelledby="Additional-Information-tab">
                        <p class="additional-information-text">{!! $details->en_additional_info !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-single-area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Similar Products</h3>
                        <h2 class="section-title">Related Products</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="/product/all" class="see-btn">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedproduct as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="{{ route('products.details', $product->slug) }}"><img class="product-thumbnal"
                                        src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">NEW</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" product-id="11" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="11" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">{{ ucwords($product->brand->en_brand_name) ?? '' }}
                                </h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link"
                                        href="{{ route('products.details', $product->slug) }}">{{ $product->en_name }}</a>
                                </h3>
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ {{ $product->price }}</span>
                                    <span class="price">$ {{ $product->discounted_price }}</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                    data-id="{{ $product->id }}">Add
                                    To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $('.addCart').click(function(e) {
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
@endsection
