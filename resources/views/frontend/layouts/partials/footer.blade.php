<!-- footer area start here -->
<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                    <div class="single-widget about-widget">
                        <a href="http://127.0.0.1:8000" class="footer-brand-logo mb-25"><img
                                src="{{ asset('frontend') }}/assets/images/.{{ get_settings()->logo ?? '' }}"
                                alt="footer-logo" /></a>
                        <p class="address-text">
                            {{ get_settings()->address ?? '' }}
                        </p>
                        <div class="block-content mb-30">
                            <p class="contact">Call us: {{ get_settings()->phone ?? '' }}</p>
                            <p class="contact">Email: {{ get_settings()->email ?? '' }}</p>
                        </div>
                        <ul class="social-media">
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="{{ get_settings()->fb ?? '' }}">
                                    <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="{{ get_settings()->twitter ?? '' }}">
                                    <i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="widget-menu show">
                                    @foreach (get_categories() as $category)
                                        <li class="menu-item"><a class="menu-link"
                                                href="{{ route('products.category', $category->slug) }}">{{ ucwords($category->en_category_name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Brands</h3>
                                <ul class="widget-menu">
                                    <li class="menu-item"><a class="menu-link" href="#">Circle</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">CodeLab</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">HEXLAB</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">Kanba</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul class="widget-menu">
                                    <li class="menu-item"><a class="menu-link" href="{{ route('faq') }}">Help
                                            &amp; FAQ</a></li>
                                    <li class="menu-item"><a class="menu-link"
                                            href="{{ route('terms.conditions') }}">Terms of
                                            Conditions</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="{{ route('privacy') }}">Privacy
                                            Policy</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="{{ route('contact') }}">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-widget newsletter-widget">
                        <h3 class="widget-title">Subscribe for Newsletter</h3>
                        <p class="newsletter-text">
                            Receive our latest updates about our <br> products and promotions.
                        </p>
                        <div class="newsletter-form mb-40">
                            <form id="subscribe_form" method="POST" action="{{ route('subscribe.store') }}">
                                @csrf
                                <div class="form-group d-flex">
                                    <input type="email" class="form-control subscribe" id="subscribe" name="email"
                                        placeholder="Enter your email" required>
                                    <button type="submit" class="btn btn-primary subscribe-btn">Subscribe</button>
                                </div>
                            </form>

                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="alert alert-success mt-2">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Validation Errors --}}
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="footer-bottom-wrap">
                Designed &amp; Developed By liveprojectacademy.com
            </div>
        </div>
    </div>
</footer>
<!-- footer area end here -->
<!-- footer area end here -->
<div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
<div id="SubscribeStore" data-url="/subscribe/store"></div>
<div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="public-order-track.html" method="POST">
                    <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                            placeholder="Enter order number">
                    </div>
                    <div class="modal-btn-wrap text-end">
                        <button type="submit" class="primary-btn">Track</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="public-order-track.html" method="POST">
                    <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" name="order_number"
                            placeholder="Enter order number">
                    </div>
                    <div class="modal-btn-wrap text-end">
                        <button type="submit" class="primary-btn">Track</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="">Login</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/user/login-modal" method="POST">
                    <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div>

                    <div class="modal-btn-wrap text-end">
                        <button type="submit" class="primary-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
<div id="SubscribeStore" data-url="/subscribe/store"></div>

<!-- Js file  -->
<script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
<script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/main.js"></script>
<script src="{{ asset('frontend') }}/assets/js/front/custom.js"></script>
<script src="{{ asset('frontend') }}/assets/js/front/extra.js"></script>
<script src="{{ asset('frontend') }}/assets/js/front/sweat_aleart.js"></script>
<script src="{{ asset('frontend') }}/assets/js/common.js"></script>


<script>
    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script"),
                tag = document.getElementsByTagName("script")[0];
            script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                .substring(7);
            tag.parentNode.insertBefore(script, tag);
        };
        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
            loader);
    })(window, document);
</script>
<script src="{{ asset('frontend') }}/assets/js/pages/home.js"></script>
<script src="{{ asset('frontend') }}/assets/js/pages/cart.js"></script>
