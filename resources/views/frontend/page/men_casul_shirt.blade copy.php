@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('men') }}">Men</a>
                    <span class="breadcrumb-item active">Casul Shirt List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Products Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Casul Shirt Featured Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual1.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 1"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual1.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 1" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual1.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 1" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual1.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 1</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual2.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt2"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 2" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual2.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt2" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 2</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual3.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 3"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual3.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 3" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual3.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 3" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual3.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 3</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual4.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 4"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual4.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 4" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual4.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 4" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual4.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 4</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual5.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 5"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual5.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 5" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual5.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 5" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual5.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 5</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual6.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 6"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual6.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 6" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual6.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 6" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual6.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 6</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual7.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 7"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 7" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual7.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 7" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 7</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;"  style="height: 300px; width: 300px;"  src="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 8"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 8" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="Casul Shirt 8" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 8</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection

