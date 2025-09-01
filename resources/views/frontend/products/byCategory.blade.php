@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">
                    {{ $selectedCategory->en_category_name ?? 'Shop' }}
                </h2>

                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a>
                    </li>
                    <li class="page-item">
                        Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Product Area Start -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-widget-area mobile-sidebar">
                        <div class="sidebar-widget-header d-block d-lg-none">
                            <div class="widget-header-wrap">
                                <h5 class="offcanvas-title">Filter</h5>
                                <button type="button" class="btn-close text-reset sidebar-close"></button>
                            </div>
                        </div>

                        <div class="single-widget search-widget">
                            <h3 class="widget-title">Search Here</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="searchwidget" name="searchwidget"
                                        placeholder="Product Store" />
                                    <button type="button" class="search-btn"><i
                                            class="flaticon-search searchWidget"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="single-widget price-widget">
                            <h3 class="widget-title">Price</h3>
                            <form>
                                <div class="price-wrap">
                                    <div class="price-wrap-left">
                                        <div class="single-price">
                                            <input type="number" class="form-control" id="minPrice" name="min_price"
                                                placeholder="$ Min" min="1" />
                                        </div>
                                        <div class="single-price">
                                            <input type="number" class="form-control" id="maxPrice" name="max_price"
                                                placeholder="$ Max" />
                                        </div>
                                    </div>
                                    <button type="button" class="price-submit PriceSubmit"><i
                                            class="fas fa-play"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="single-widget colors-widget">
                            <h3 class="widget-title">Colors</h3>
                            <div class="colors-list">
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input style="background: #FF0000" class="form-check-input checkColor"
                                            type="checkbox" id="#FF0000" value="Red">
                                        <label class="form-check-label" for="#FF0000">Red</label>
                                    </div>
                                    <span class="colors-count">8</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input style="background: #000000" class="form-check-input checkColor"
                                            type="checkbox" id="#000000" value="Black">
                                        <label class="form-check-label" for="#000000">Black</label>
                                    </div>
                                    <span class="colors-count">3</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input style="background: #808080" class="form-check-input checkColor"
                                            type="checkbox" id="#808080" value="Gray">
                                        <label class="form-check-label" for="#808080">Gray</label>
                                    </div>
                                    <span class="colors-count">2</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input style="background: #C0C0C0" class="form-check-input checkColor"
                                            type="checkbox" id="#C0C0C0" value="Silver">
                                        <label class="form-check-label" for="#C0C0C0">Silver</label>
                                    </div>
                                    <span class="colors-count">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget size-widget">
                            <h3 class="widget-title">Size</h3>
                            <div class="size-list">
                                <div class="single-size">
                                    <input class="form-check-input checkSize" type="checkbox" id="1"
                                        value="S">
                                    <label class="form-check-label" for="1">S</label>
                                </div>
                                <div class="single-size">
                                    <input class="form-check-input checkSize" type="checkbox" id="2"
                                        value="M">
                                    <label class="form-check-label" for="2">M</label>
                                </div>
                                <div class="single-size">
                                    <input class="form-check-input checkSize" type="checkbox" id="3"
                                        value="L">
                                    <label class="form-check-label" for="3">L</label>
                                </div>
                                <div class="single-size">
                                    <input class="form-check-input checkSize" type="checkbox" id="4"
                                        value="XL">
                                    <label class="form-check-label" for="4">XL</label>
                                </div>
                                <div class="single-size">
                                    <input class="form-check-input checkSize" type="checkbox" id="5"
                                        value="XXL">
                                    <label class="form-check-label" for="5">XXL</label>
                                </div>
                            </div>
                        </div>

                        <div class="single-widget brand-widget">
                            <h3 class="widget-title">Brand</h3>
                            <div class="brand-list">
                                @foreach ($brands as $data)
                                    <div class="single-brand">
                                        <div class="brand-left">
                                            <input class="form-check-input CheckBrand" type="checkbox" value="Circle">
                                            <label class="form-check-label"
                                                for="Renuar">{{ ucwords($data->en_brand_name) }}</label>
                                        </div>
                                        <span class="brand-count">{{ $data->bcount }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="product-section-top">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="product-section-top-left">
                                    <button class="sidebar-filter d-block d-lg-none" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                        aria-controls="offcanvasExample">
                                        Filter <img src="{{ asset('frontend') }}/assets/images/angle-down.svg"
                                            alt="angle-down" />
                                    </button>
                                    <div class="list-grid-view">
                                        <a href="/product/category/1" class="view-btn grid-view active"><img
                                                class="view-icon"
                                                src="{{ asset('frontend') }}/assets/images/view-grid.svg"
                                                alt="view-grid" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="product-filter">
                                    <select class="form-select sortingFilter productByCategory">
                                        <option value="stop">Categories</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->slug }}">{{ ucwords($item->en_category_name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="filterProduct">
                        <div class="product-list">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="{{ route('products.details', $data->slug) }}"><img
                                                        class="product-thumbnal"
                                                        src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                                        alt="product" /></a>
                                                <div class="product-flags">
                                                    <span class="product-flag sale">NEW</span>
                                                    <span class="product-flag discount">-10.00</span>
                                                </div>
                                                <ul class="prdouct-btn-wrapper">
                                                    <li class="single-product-btn">
                                                        <a class="product-btn CompareList" data-id="11"
                                                            title="Add To Compare"><i
                                                                class="icon flaticon-bar-chart"></i></a>
                                                    </li>
                                                    <li class="single-product-btn">
                                                        <a class="product-btn MyWishList" data-id="11"
                                                            title="Add To Wishlist"><i class="icon flaticon-like"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info text-center">
                                                <h4 class="product-catagory">
                                                    {{ ucwords($product->category->en_category_name) ?? '' }}
                                                </h4>
                                                <input type="hidden" name="quantity" value="1"
                                                    id="product_quantity">
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
                </div>
            </div>
        </div>
    </div>

    <!-- For Mobile Filter Sidebar Start -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="sidebar-widget-area">
                <div class="single-widget search-widget p-0 bg-transparent">
                    <h3 class="widget-title">Search Here</h3>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control bg-color" id="searchWidgetMobile"
                                name="searchWidgetMobile" placeholder="Product Store" />
                            <button type="button" class="search-btn searchWidgetMobile"><i
                                    class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget categories-widget p-0 bg-transparent">
                    <h3 class="widget-title">Categories</h3>
                    <div class="categories-list">
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input CheckCategoryMobile" type="checkbox"
                                    value="Health Category">
                                <label class="form-check-label">Health Category</label>
                            </div>
                            <span class="categories-count">3</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input CheckCategoryMobile" type="checkbox"
                                    value="Women Fashion">
                                <label class="form-check-label">Women Fashion</label>
                            </div>
                            <span class="categories-count">2</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input CheckCategoryMobile" type="checkbox" value="Men Fashion">
                                <label class="form-check-label">Men Fashion</label>
                            </div>
                            <span class="categories-count">6</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input CheckCategoryMobile" type="checkbox" value="Electronic">
                                <label class="form-check-label">Electronic</label>
                            </div>
                            <span class="categories-count">0</span>
                        </div>
                    </div>
                </div>
                <div class="single-widget price-widget p-0 bg-transparent">
                    <h3 class="widget-title">Price</h3>
                    <form>
                        <div class="price-wrap">
                            <div class="price-wrap-left">
                                <div class="single-price">
                                    <input type="number" class="form-control" id="minPriceMobile" name="minprice1"
                                        placeholder="$ Min" />
                                </div>
                                <div class="single-price">
                                    <input type="number" class="form-control" id="maxPriceMobile" name="maxprice1"
                                        placeholder="$ Max" />
                                </div>
                            </div>
                            <button type="button" class="price-submit PriceSubmitMobile"><i
                                    class="fas fa-play"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget colors-widget p-0 bg-transparent">
                    <h3 class="widget-title">Colors</h3>
                    <div class="colors-list">
                        <div class="single-colors">
                            <div class="colors-left">
                                <input style="background: #FF0000" class="form-check-input checkColorMobile"
                                    type="checkbox" id="#FF0000" value="Red">
                                <label class="form-check-label" for="#FF0000">Red</label>
                            </div>
                            <span class="colors-count">8</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input style="background: #000000" class="form-check-input checkColorMobile"
                                    type="checkbox" id="#000000" value="Black">
                                <label class="form-check-label" for="#000000">Black</label>
                            </div>
                            <span class="colors-count">3</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input style="background: #808080" class="form-check-input checkColorMobile"
                                    type="checkbox" id="#808080" value="Gray">
                                <label class="form-check-label" for="#808080">Gray</label>
                            </div>
                            <span class="colors-count">2</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input style="background: #C0C0C0" class="form-check-input checkColorMobile"
                                    type="checkbox" id="#C0C0C0" value="Silver">
                                <label class="form-check-label" for="#C0C0C0">Silver</label>
                            </div>
                            <span class="colors-count">2</span>
                        </div>
                    </div>
                </div>
                <div class="single-widget size-widget p-0 bg-transparent">
                    <h3 class="widget-title">Size</h3>
                    <div class="size-list">

                        <div class="single-size">
                            <input class="form-check-input checkSizeMobile" type="checkbox" id="1"
                                value="S">
                            <label class="form-check-label" for="1">S</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input checkSizeMobile" type="checkbox" id="2"
                                value="M">
                            <label class="form-check-label" for="2">M</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input checkSizeMobile" type="checkbox" id="3"
                                value="L">
                            <label class="form-check-label" for="3">L</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input checkSizeMobile" type="checkbox" id="4"
                                value="XL">
                            <label class="form-check-label" for="4">XL</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input checkSizeMobile" type="checkbox" id="5"
                                value="XXL">
                            <label class="form-check-label" for="5">XXL</label>
                        </div>

                    </div>
                </div>
                <div class="single-widget brand-widget p-0 bg-transparent">
                    <h3 class="widget-title">Brand</h3>
                    <div class="brand-list">
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="Circle">
                                <label class="form-check-label" for="Renuar">Circle</label>
                            </div>
                            <span class="brand-count">5</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="CodeLab">
                                <label class="form-check-label" for="Renuar">CodeLab</label>
                            </div>
                            <span class="brand-count">3</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="HEXLAB">
                                <label class="form-check-label" for="Renuar">HEXLAB</label>
                            </div>
                            <span class="brand-count">3</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="Kanba">
                                <label class="form-check-label" for="Renuar">Kanba</label>
                            </div>
                            <span class="brand-count">0</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="treva">
                                <label class="form-check-label" for="Renuar">treva</label>
                            </div>
                            <span class="brand-count">0</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="Zootv">
                                <label class="form-check-label" for="Renuar">Zootv</label>
                            </div>
                            <span class="brand-count">0</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input CheckBrandMobile" type="checkbox" value="BanCi">
                                <label class="form-check-label" for="Renuar">BanCi</label>
                            </div>
                            <span class="brand-count">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- For Mobile Filter Sidebar End -->
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

    <script>
        $(document).ready(function() {
            $('.productByCategory').change(function() {
                let slug = $(this).val();
                if (slug) {
                    let newUrl = "{{ url('category/') }}/" + slug;
                    window.location.href = newUrl;
                }
            })
        })
    </script>
@endsection
