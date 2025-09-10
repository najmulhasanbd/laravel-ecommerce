@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">My Reviews</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="">Home</a></li>
                    <li class="page-item">My Reviews</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Profile Page area start here  -->
    <div class="profile-page-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="section-wrap account-page-sidemenu user-profile-sidebar">
                        <nav class="account-page-menu">
                            <ul>
                                <li class="active"><a href=""><i class="fas fa-user"></i>My
                                        Profile</a></li>
                                <li class=""><a href="{{ route('user.orders') }}"><i class="fas fa-box-open"></i>My
                                        Order</a></li>
                                <li class=""><a href="{{ route('user.reviews') }}"><i class="fas fa-user-edit"></i>My
                                        Review</a></li>
                                <li class="">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="user-profile-right-part">
                        <div class="user-profile-content-box my-reviwe-list-box">

                            <div class="d-flex justify-content-between align-items-center text-black mb-5">
                                <h2 class="user-profile-content-title">My Review</h2>
                            </div>

                            <div class="single-review-item bg-white d-flex align-items-center">
                                <div class="review-left flex-shrink-0">
                                    <a href="http://127.0.0.1:8000/product/single/1"><img class="product-thumbnail"
                                            src="http://127.0.0.1:8000/uploaded_files/product_image/product-image-1.png"
                                            alt="product"></a>
                                </div>
                                <div class="review-right flex-grow-1">
                                    <h4 class="product-name"><a
                                            href="http://127.0.0.1:8000/product/single/plaid-cotton-shirt">Plaid Cotton
                                            Shirt</a></h4>
                                    <!-- This is server side code. User can not modify it. -->
                                    <ul class="product-review">
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <p>good</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
