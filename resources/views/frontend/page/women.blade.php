@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                    <span class="breadcrumb-item active"> Women Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Women Recent Products List</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/tops/tops.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_tops') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_tops') }}">Tops & T-Shirt
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/dresses/Dresses.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_dress') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_dress') }}">Dresses</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/bottom/Bottoms.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_bottom') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_bottom') }}">Bottoms</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/Kameez/Kameez.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_kameez') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_kameez') }}">Kameez</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/Bags/Bags.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_bag') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_bag') }}">Bags</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/Cosmetic/Cosmetic.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_cosmetic') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_cosmetic') }}">Cosmetic</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/women/shoes/Shoes.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('women_shoes') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('women_shoes') }}">Shoes</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/product-2.jpg') }}" alt="">
                        <div class="product-action">
                            <a href="{{ route('juwalari') }}" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="{{ route('juwalari') }}">Juwalari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection

