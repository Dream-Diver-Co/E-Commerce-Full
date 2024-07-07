@extends("frontend.layouts.master")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                <span class="breadcrumb-item active">Men Shop List</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Men Recent Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/panjabi/Panjabi.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_panjabi') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_panjabi') }}">Panjabi
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_casul_shirt') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_casul_shirt') }}">Casual Shirt</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/f-shirt/Formal.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_formal_shirt') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_formal_shirt') }}">Formal Shirt</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/t-shirt/T-Shirt.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_t_shirt') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_t_shirt') }}">T-Shirt</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/polo/Polo.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_polo') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_polo') }}">Polo</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/bottom/Bottom.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_bottom') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_bottom') }}">Bottom</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/blazer/Blazer8.jpeg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_blazer') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_blazer') }}">Blazer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/shoes/Sneakers.jpg') }}" alt="">
                    <div class="product-action">
                        <a href="{{ route('men_shoes') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('men_shoes') }}">Sneakers</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

@endsection

