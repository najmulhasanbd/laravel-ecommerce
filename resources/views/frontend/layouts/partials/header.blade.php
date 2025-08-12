    <!-- Preloader Area Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend') }}/assets/images/preloader.svg" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header component start here  -->
    <div>
        <header class="header-area d-none d-lg-block">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="header-top-left">
                                <a href="tel:+777 2345 7886">
                                    <p class="contact-info">
                                        <i class="icon flaticon-phone"></i>
                                        Call Us:
                                        +123 2587 7886
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="header-top-right">
                                <div class="top-bar-menu">
                                    <ul class="menu-list">
                                        <li class="menu-item"><a class="menu-link" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#trackOrderModal">Track Order</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="switcher-lang-currency">
                                    <div class="lang-switcher">
                                        <span class="flag"><img
                                                src="{{ asset('frontend') }}/assets/images/language/en.png"
                                                alt="united-states" /></span>
                                        <a href="javascript:void(0)" class="lang">
                                            English
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="lang-list">
                                            <li class="single-lang"><span class="flag"><img
                                                        src="{{ asset('frontend') }}/assets/images/language/fr.png"
                                                        alt="india"></span><a class="lang-text"
                                                    href="/locale/fr">German</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="account-switcher">
                                    <span class="flag"><img
                                            src="{{ asset('frontend') }}/assets/images/user-avatar11.png"
                                            alt="fashionwave"></span>
                                    <a href="signin.html" class="lang">My Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-middle-wrap">
                        <div class="brand-area">
                            <a class="brand-logo" href="index.html"><img class="brand-image"
                                    src="{{ asset('frontend') }}/assets/images/logo.png" alt="Fashionwave" /></a>
                        </div>
                        <div class="search-area">
                            <form action="#" method="get">
                                <div class="search-wrap">
                                    <select class="form-select" name="category">
                                        <option value="" selected>Categories</option>
                                        <option value="1">
                                            Health Category
                                        </option>
                                        <option value="2">
                                            Women Fashion
                                        </option>
                                        <option value="3">
                                            Men Fashion
                                        </option>
                                        <option value="4">
                                            Electronic
                                        </option>
                                    </select>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" name="search"
                                            placeholder="Search Here" />
                                        <button type="submit" class="search-btn"><i
                                                class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="header-right">

                            <div class="wishlist single-btn">
                                <a href="wishlist.html" class="wishlist-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-like"></i>
                                        <span class="count wishListCuntFromController">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Wishlist</span>
                                        <span class="item-count wishListCuntFromController">0
                                            items</span>
                                    </div>
                                </a>
                            </div>
                            <div class="compare single-btn">
                                <a href="compare.html" class="compare-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-bar-chart"></i>
                                        <span class="count CompareCuntFromController">0</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Compare</span>
                                        <span class="item-count CompareCuntFromController">0
                                            items</span>
                                    </div>
                                </a>
                            </div>

                            <div class="cart single-btn">
                                <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                                    aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-shopping-bag"></i>
                                        <span class="count totalCountItem">2</span>
                                    </div>
                                    <div class="btn-right">
                                        <span class="btn-text">Your Cart</span>
                                        <span class="price totalAmount">
                                            $ 540</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="menu-area">
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children active">
                            <a class="menu-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="menu-item "><a class="menu-link" href="shop.html">Shop</a>
                        </li>

                        <li class="menu-item "><a class="menu-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="menu-item ">
                            <a class="menu-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </header>
    </div>
    <!-- header component end here  -->

    <!-- mobile-header-area area start here  -->
    <div>
        <div class="mobile-header-area d-block d-lg-none">
            <div class="container">
                <div class="menu-wrap">
                    <div class="header-left">
                        <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image"
                                src="{{ asset('frontend') }}/assets/images/logo.png" alt="Fashionwave" /></a>
                    </div>
                    <div class="header-right">
                        <a href="wishlist.html" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like"></i>
                                <span class="count wishListCuntFromController">0</span>
                            </div>
                        </a>
                        <a href="compare.html" class="compare-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-bar-chart"></i>
                                <span class="count CompareCuntFromController">0</span>
                            </div>
                        </a>
                        <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                            aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-shopping-bag"></i>
                                <span class="count totalCountItem">2</span>
                            </div>
                        </a>
                        <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i
                                class="fas fa-bars"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- mobile-header-area area end here  -->

    <!-- mobile-menu-area area start here  -->
    <div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
        <div class="mobile-menu-area">
            <div class="offcanvas-header">
                <a class="brand-logo" href="http://127.0.0.1:8000"><img class="brand-image"
                        src="{{ asset('frontend') }}/assets/images/logo.png" alt="Fashionwave" /></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="menu-search-form">
                <form>
                    <div class="search-wrap">
                        <select class="form-select">
                            <option selected>Categories</option>
                            <option value="/product/category/1">
                                Health Category</option>
                            <option value="/product/category/2">
                                Women Fashion</option>
                            <option value="/product/category/3">
                                Men Fashion</option>
                            <option value="/product/category/4">
                                Electronic</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobilesearch" name="search"
                                placeholder="Search Here" />
                            <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <nav class="main-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">Home</a></li>
                    <li class="menu-item"><a class="menu-link" href="shop.html">Shop</a>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">Categories</a></li>
                    <li class="menu-item"><a class="menu-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item"><a class="menu-link" href="{{ route('contact') }}">Contact</a></li>

                </ul>
            </nav>
            <div class="menu-bottom">
                <a class="account-btn mb-3" href="/user/profile"><i class="user-icon flaticon-user"></i> Profile</a>
                <a class="account-btn mb-3" href="/user/logout"><i class="user-icon flaticon-user"></i>
                    Logout</a>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area area end here  -->

    <!-- Cart Offcanvas Sidebar Menu area Start here  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar"
        aria-labelledby="cartOffcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Shopping Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="cart-product-list" id="bodyData">

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="javascript:void(0)"><img class="product-thumbnal"
                                    src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                    alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h3 class="product-name"><a class="product-link" href="javascript:void(0)">Plaid
                                        Cotton
                                        Shirt</a></h3>
                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                        data-id="877875226d30b89ecef4738c7e2e9378">-</div>
                                    <input class="qty-input cart-plus-minus-box qty_value" type="text"
                                        name="qtybutton" id="qty_value" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                        data-id="877875226d30b89ecef4738c7e2e9378">+</div>
                                </div>
                                <button class="cart-remove-btn deleteItem"
                                    data-id="877875226d30b89ecef4738c7e2e9378">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price me-0">
                                    $ 100
                                </span>
                                <span class="price">
                                    $ 90
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->
                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="javascript:void(0)"><img class="product-thumbnal"
                                    src="{{ asset('frontend') }}/assets/images/products/tshirt.png"
                                    alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h3 class="product-name"><a class="product-link" href="javascript:void(0)">Rosmo
                                        Namino</a></h3>
                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn qty_decrease"
                                        data-id="5fe6269ce66b4dd14584eb9b1b633eeb">-</div>
                                    <input class="qty-input cart-plus-minus-box qty_value" type="text"
                                        name="qtybutton" id="qty_value" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn qty_increase"
                                        data-id="5fe6269ce66b4dd14584eb9b1b633eeb">+</div>
                                </div>
                                <button class="cart-remove-btn deleteItem"
                                    data-id="5fe6269ce66b4dd14584eb9b1b633eeb">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price me-0">
                                    $ 500
                                </span>
                                <span class="price">
                                    $ 450
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->

            </div>

            <div class="total-bottom-part">
                <div class="total-count d-flex">
                    <h3>Total</h3>
                    <h4 class="totalAmount"> $ 540</h4>
                </div>
                <a href="checkout.html" class="proceed-to-btn d-block text-center">
                    Proceed To Checkout
                </a>
                <div class="view-cart-go">
                    <a href="cart.html">View Cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Offcanvas Sidebar Menu area end here  -->
    <div id="CartDeleteFromSession" data-url="/cart/delete"></div>
    <div id="CartIncrementFromSession" data-url="/cart/increase"></div>
    <div id="CartDecrementFromSession" data-url="/cart/decrease"></div>
