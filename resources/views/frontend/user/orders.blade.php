@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">My Order</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">My Order</li>
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
                                        Review</a>
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
                        <div class="user-profile-content-box my-order-page-box">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-active-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-active-order" type="button" role="tab"
                                        aria-controls="pills-active-order" aria-selected="true">
                                        Active Order
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-delivered-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-delivered-order" type="button" role="tab"
                                        aria-controls="pills-delivered-order" aria-selected="false">
                                        Delivered Order
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-cancelled-order-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-cancelled-order" type="button" role="tab"
                                        aria-controls="pills-cancelled-order" aria-selected="false">
                                        Cancelled Order
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-active-order" role="tabpanel"
                                    aria-labelledby="pills-active-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Total Price</th>
                                                        <th>Track order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>Order No: WLk4Mh</p>
                                                            <p>Order Time: November 11, 2024, 6:56 pm</p>
                                                        </td>
                                                        <td>
                                                            <div class="item-image-lsit d-flex align-items-center">
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="assets/images/products/tshirt.png"
                                                                        alt="images">
                                                                </div>
                                                                <div class="single-item me-2">
                                                                    <img class="order-image"
                                                                        src="assets/images/products/tshirt.png"
                                                                        alt="images">
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td class="my-order-td-row">
                                                            <span class="amount"> $ 540</span>
                                                        </td>
                                                        <td class="my-order-td-row"><a href="order-track.html"><i
                                                                    class="fas fa-user-cog"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-delivered-order" role="tabpanel"
                                    aria-labelledby="pills-delivered-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Total Price</th>
                                                        <th>Write Review</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4" class="text-center">
                                                            <h1>No data found!</h1>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-cancelled-order" role="tabpanel"
                                    aria-labelledby="pills-cancelled-order-tab">
                                    <div class="order-table mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Item</th>
                                                        <th>Total Price</th>
                                                        <th>Track order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4" class="text-center">
                                                            <h1>No data found!</h1>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
