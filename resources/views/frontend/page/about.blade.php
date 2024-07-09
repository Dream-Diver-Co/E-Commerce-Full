@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <span class="breadcrumb-item active">About </span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    @if($abouts->isNotEmpty())
        @php
           $item = $abouts->first();
        @endphp
        <!-- Carousel Start -->
        <div class="container-fluid mb-3">
            <div class="row px-xl-5">
                <div class="col-lg-6">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('storage/'. $item->image) }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            {{-- <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Men's fashion is a broad and dynamic field, encompassing a wide range of styles, trends, and influences. Here are some key elements and trends in men's fashion</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('men') }}">Shop Now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2 bg-light">
                    <div class="inner-column" style="margin: 10px">
                        <div class="sec-title">
                            <span class="title">{{ $item->subtitle }} </span>
                            <h2>{{ $item->title }}</h2>
                        </div>
                        <div class="text">
                            <p>{{ $item->description }}</p>
                        </div><br>
                        <div class="btn-box">
                            <a href="{{ route('contact')}}" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        {{-- tab menu start --}}
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Bihind Story</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Mission & Vision</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Service</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{ $item->behind }}</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>{{ $item->mission }}</p>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>{{ $item->service }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- tab menu end --}}
    @endif


@endsection

