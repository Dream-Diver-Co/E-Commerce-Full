@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-6">
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/men.gif') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Men's fashion is a broad and dynamic field, encompassing a wide range of styles, trends, and influences. Here are some key elements and trends in men's fashion</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('men') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/women2.gif') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Women’s fashion is a dynamic and ever-evolving field, encompassing a wide range of styles, trends, and influences. Here are some key aspects</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('women') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div class="carousel-item position-relative active" style="height: 230px; margin-bottom: 15px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/baby.gif') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Baby Fashion</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                                Baby fashion is a delightful and ever-evolving segment of the fashion industry, catering to the unique needs</p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('baby') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Carousel Start -->
        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-6">
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/offer1.gif') }}" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/offer.gif') }}" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/offer2.gif') }}" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="product-offer mb-30" style="height: 200px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/offer4.gif') }}" alt="">
                        <div class="offer-text">
                            <h6 class="text-white text-uppercase">Save 20%</h6>
                            <h3 class="text-white mb-3">Special Offer</h3>
                            <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
        <!-- Carousel End -->

@endsection

