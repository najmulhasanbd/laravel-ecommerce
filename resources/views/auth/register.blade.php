@extends('frontend.layouts.app')

@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Sign Up</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">Sign Up</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
    <div class="sign-in-page sign-up-page section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="far fa-user"></span>
                        </div>
                        <h1 class="text-center mb-4">Sign Up</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <input id="name" type="text"
                                    class="form-control rounded-left @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="email" type="email"
                                    class="form-control rounded-left @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="password" type="password"
                                    class="form-control rounded-left @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input id="password-confirm" type="password" class="form-control rounded-left"
                                    name="password_confirmation" placeholder="Confirm Password" required
                                    autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                    class="form-control btn btn-primary rounded submit px-3 primary-btn auth-btn">
                                    Sign Up
                                </button>
                            </div>

                            <hr>

                            <div class="form-group">
                                <a href="/user/auth/google"
                                    class="form-control btn btn-primary rounded submit px-3 google-btn">
                                    <i class="fab fa-google"></i> Login With Google
                                </a>
                            </div>

                            <hr>

                            <div class="already-have-account">
                                Already have an account? <a href="{{ route('login') }}" class="forget-password-link">Sign
                                    In</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
