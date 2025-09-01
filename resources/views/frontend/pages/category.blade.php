@extends('frontend.layouts.app')



@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Category List</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ url('/') }}">Home</a></li>
                    <li class="page-item">Category List</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="about-us-area section popular-categories-area section-bg section-top pb-100">
        <div class="container">
            <div class="row">
                @foreach ($categories as $data)
                    <div class="col-lg-4 col-md-6">
                        <a class="single-categorie" href="{{ route('products.category', $data->slug) }}">
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
        </div>
    </div>
    <!-- about us area end here  -->
@endsection
