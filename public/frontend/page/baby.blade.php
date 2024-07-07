@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.html">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop1.html">Shop</a>
                    <span class="breadcrumb-item active">Baby Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Baby Recent Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/baby.png') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('baby_foods') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('baby_foods') }}">Baby foods</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/baby2.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('baby_clothing') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('baby_clothing') }}">
                            Baby Clothing</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/baby3.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('baby_newborn') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('baby_newborn') }}">Newborn essentials</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;" src="{{ asset('frontend/img/baby4.png') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('baby_strollers') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('baby_strollers') }}">Strollers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection
