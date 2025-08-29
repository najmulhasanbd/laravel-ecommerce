@extends('frontend.layouts.app')

@section('content')
    <!-- hero-section area start here  -->
    <div class="hero-section">
        <div class="hero-slider">
            <div class="signle-slide"
                style="background-image: url('{{ asset('frontend') }}/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    New Collection</h2>
                                <h1 class="slider-title">
                                    The New autmn
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide"
                style="background-image: url('{{ asset('frontend') }}/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    Summer Sale</h2>
                                <h1 class="slider-title">
                                    The Summer!!
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide"
                style="background-image: url('{{ asset('frontend') }}/assets/images/slider/slider.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6 mb-5">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    New Collection</h2>
                                <h1 class="slider-title">
                                    The Winter!!
                                </h1>
                                <p class="slider-text">
                                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna
                                    justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="/product/all" class="secondary-btn">See Colections
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-section area end here  -->
    <!-- Popular Categories area start here  -->
    <div class="popular-categories-area section-bg section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">
                            Popular Collections
                        </h3>
                        <h2 class="section-title">
                            Popular Categories
                        </h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="/product/all" class="primary-btn">View All Products</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $data)
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="/product/category/5">
                            <div class="categorie-wrap">
                                <div class="categorie-icon">
                                    <img src="{{ asset('frontend/assets/images/products/tshirt.png') }}" alt="">
                                </div>
                                <div class="categorie-info">
                                    <h3 class="categorie-name">{{ ucwords($data->en_category_name) }} </h3>
                                    <h4 class="categorie-subtitle">
                                        {{ $data->en_category_name }}</h4>
                                </div>
                            </div>
                            <i class="arrow flaticon-right-arrow"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-8 col-md-4 mx-auto">
                    <a href="{{ route('category.all') }}" class="primary-btn">Show All Category</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Categories area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">
                            New Products
                        </h3>
                        <h2 class="section-title">
                            Products
                        </h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="/product/all" class="see-btn">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $data)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-grid-product">
                            <div class="product-top">
                                <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                        src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">NEW</span>
                                    <span class="product-flag discount">-10.00</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="product-btn CompareList" data-id="11" title="Add To Compare"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="11" title="Add To Wishlist"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">{{ $data->category->en_category_name ?? '' }}</h4>
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link"
                                        href="/product/single/fit-flare-dress-2">{{ $data->en_name }}</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                <ul class="product-review">
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$ 200</span>
                                    <span class="price">$ 180</span>
                                </div>
                                <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                    data-id="11">Add
                                    To Cart <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Products area end here  -->

    <!-- About Area start here  -->
    <div class="about-area section" style="background-image: url(/uploaded_files/about_us_page/about-home.jpg)">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">
                            Testimonials
                        </h3>
                        <h2 class="section-title">Popular Testimonials Of<br /> Fashionwave</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="/about-us" class="primary-btn">Know More About Us</a>
                    </div>
                </div>
            </div>
            <div class="story-box-slide">
                <div class="single-story-box">
                    <img src="{{ asset('frontend') }}/assets/images/avatar.jpg" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Rony <span class="story-year">Engineer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('frontend') }}/assets/images/avatar2.jpg" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Dholi <span class="story-year">IT Officer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('frontend') }}/assets/images/avatar.jpg" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Jakir <span class="story-year">CEO</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
                <div class="single-story-box">
                    <img src="{{ asset('frontend') }}/assets/images/avatar2.jpg" class="avatar" alt="Testimonial">
                    <h3 class="story-title">Nahar <span class="story-year">Programmer</span>
                    </h3>
                    <p class="story-content">I recently discovered FashionWave, and I must say it's become my go-to for
                        all things fashion! From trendy tops to chic dresses, the site offers a fantastic variety of
                        clothing that feels both high-quality and reasonably priced. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area  end here  -->

    <!-- Trending Products area start here  -->
    <div class="trending-products-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="sub-title">
                            Popular Products
                        </h3>
                        <h2 class="section-title">
                            Trending Products
                        </h2>
                    </div>
                    <div class="col-lg-6 align-self-end text-lg-end">
                        <div class="primary-tabs">
                            <ul class="nav nav-tabs" id="TrendingProducts" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="new-arrival-tab" data-bs-toggle="tab"
                                        data-bs-target="#new-arrival" type="button" role="tab"
                                        aria-controls="new-arrival" aria-selected="true">NEW ARRIVAL</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="best-selling-tab" data-bs-toggle="tab"
                                        data-bs-target="#best-selling" type="button" role="tab"
                                        aria-controls="best-selling" aria-selected="false">BEST SELLING</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="on-sell-tab" data-bs-toggle="tab"
                                        data-bs-target="#on-sell" type="button" role="tab" aria-controls="on-sell"
                                        aria-selected="false">ON SALE</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="featured-items-tab" data-bs-toggle="tab"
                                        data-bs-target="#featured-items" type="button" role="tab"
                                        aria-controls="featured-items" aria-selected="false">FEATURED ITEMS</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="TrendingProductsContent">
                <div class="tab-pane fade show active" id="new-arrival" role="tabpanel"
                    aria-labelledby="new-arrival-tab">
                    <div class="row">
                        @foreach ($new_arrivalproducts as $data)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11"
                                                    title="Add To Compare"><i class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11"
                                                    title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">{{ ucwords($data->brand->en_brand_name) }}</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">{{ $data->en_name }}</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade " id="best-selling" role="tabpanel" aria-labelledby="best-selling-tab">
                    <div class="row">
                        @foreach ($best_sellingproducts as $data)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11"
                                                    title="Add To Compare"><i class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11"
                                                    title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">{{ ucwords($data->brand->en_brand_name) }}</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">{{ $data->en_name }}</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade " id="on-sell" role="tabpanel" aria-labelledby="on-sell-tab">
                    <div class="row">
                        @foreach ($onsaleproducts as $data)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11"
                                                    title="Add To Compare"><i class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11"
                                                    title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">{{ ucwords($data->brand->en_brand_name) }}</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">{{ $data->en_name }}</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade " id="featured-items" role="tabpanel" aria-labelledby="featured-items-tab">
                    <div class="row">
                        @foreach ($featuredproducts as $data)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="/product/single/fit-flare-dress-2"><img class="product-thumbnal"
                                                src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                alt="product" /></a>
                                        <div class="product-flags">
                                            <span class="product-flag sale">NEW</span>
                                            <span class="product-flag discount">-10.00</span>
                                        </div>
                                        <ul class="prdouct-btn-wrapper">
                                            <li class="single-product-btn">
                                                <a class="product-btn CompareList" data-id="11"
                                                    title="Add To Compare"><i class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="11"
                                                    title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-info text-center">
                                        <h4 class="product-catagory">{{ ucwords($data->brand->en_brand_name) }}</h4>
                                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                                        <h3 class="product-name"><a class="product-link"
                                                href="/product/single/fit-flare-dress-2">{{ $data->en_name }}</a>
                                        </h3>
                                        <!-- This is server side code. User can not modify it. -->
                                        <ul class="product-review">
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="product-price">
                                            <span class="regular-price">$ 200</span>
                                            <span class="price">$ 180</span>
                                        </div>
                                        <a href="javascript:void(0)" title="Add To Cart" class="add-cart addCart"
                                            data-id="11">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Products area end here  -->
    <div>
    </div>
    <!-- Image Gallery area end here  -->
    <!-- Testimonial ara end here  -->
    <div id="AddToCompareItemUrl" data-url="{{ route('compares.index') }}/add"></div>
    <div id="AddToCartIntoSession" data-url="/cart/add"></div>
    <div id="productWishlistUrl" data-url="{{ route('wishlists.index') }}/add"></div>
    <div id="currency-price-url" data-url="/currency-price"></div>
    <div id="currency-symbol-url" data-url="/currency-symbol"></div>
    <div id="productImgAsset" data-url="/uploaded_files/product_image"></div>
@endsection
