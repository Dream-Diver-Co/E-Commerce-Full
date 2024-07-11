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
                    <span class="breadcrumb-item active">Pnajabi List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Products Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Panjabi Featured Products</span></h2>
        <div class="row px-xl-5">
            @foreach($panjabis as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" style="height: 300px; width: 300px;" src="{{ asset('storage/'. $item->image) }}" alt="">
                        <div class="product-action">
                            <a href="" title="View Panjabi" class="btn btn-outline-dark btn-square view-btn" data-name="{{ $item->name }}"  data-price="{{ $item->price }}" data-image="{{ asset('storage/'. $item->image) }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="{{ $item->name }}" data-price="{{ $item->price }}" data-image="{{ asset('storage/'. $item->image) }}" href="#"><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="{{ $item->name }} " data-price="{{ $item->price }}" data-image="{{ asset('storage/'. $item->image) }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp" ><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{ $item->name }}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{ $item->price }}</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
            @endforeach
        </div>
    </div>
    <!-- Products End -->

            <!-- Product view modal start -->
            <div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-view">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="itemModalLabel">Item Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="container-fluid pb-5">
                            <div class="row px-xl-5 mt-1">
                                <div class="col-lg-5 mb-30">
                                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner bg-light">
                                            <div class="carousel-item active">
                                                <img id="itemModalImage" src="" alt="Item Image" style="width: 100%; height: auto;">
                                            </div>

                                        </div>
                                        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                                            <i class="fa fa-2x fa-angle-left text-dark"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                                            <i class="fa fa-2x fa-angle-right text-dark"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 h-auto mb-30">
                                    <div class="h-100 bg-light p-30">
                                        <h3 id="itemModalName"></h3>
                                        <div class="d-flex mb-3">
                                            <div class="text-primary mr-2">
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star"></small>
                                                <small class="fas fa-star-half-alt"></small>
                                                <small class="far fa-star"></small>
                                            </div>
                                            <small class="pt-1">(99 Reviews)</small>
                                        </div>
                                        <h3 class="font-weight-semi-bold mb-4" id="itemModalPrice"></h3>
                                        <p class="mb-4">{{ $item->subtitle }}</p>
                                        <div class="d-flex mb-3">
                                            <strong class="text-dark mr-3">Sizes:</strong>
                                            <form>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="size-1" name="size">
                                                    <label class="custom-control-label" for="size-1">XS</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                                                    <label class="custom-control-label" for="size-2">S</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                                                    <label class="custom-control-label" for="size-3">M</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                                                    <label class="custom-control-label" for="size-4">L</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="size-5" name="size">
                                                    <label class="custom-control-label" for="size-5">XL</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <strong class="text-dark mr-3">Colors:</strong>
                                            <form>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="color-1" name="color">
                                                    <label class="custom-control-label" for="color-1">Black</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="color-2" name="color">
                                                    <label class="custom-control-label" for="color-2">White</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="color-3" name="color">
                                                    <label class="custom-control-label" for="color-3">Red</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="color-4" name="color">
                                                    <label class="custom-control-label" for="color-4">Blue</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="color-5" name="color">
                                                    <label class="custom-control-label" for="color-5">Green</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="d-flex align-items-center mb-4 pt-2">
                                            <div class="input-group quantity mr-3" style="width: 130px;">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary btn-minus">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control bg-secondary border-0 text-center" value="1">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary btn-plus">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button> -->
                                            <button type="button" class="btn btn-primary add-to-cart-from-modal-btn"><i class="fa fa-shopping-cart mr-1"></i>Add to Cart</button>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <strong class="text-dark mr-2">Share on:</strong>
                                            <div class="d-inline-flex">
                                                <a class="text-dark px-2" href="">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a class="text-dark px-2" href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a class="text-dark px-2" href="">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                                <a class="text-dark px-2" href="">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-xl-5">
                                <div class="col">
                                    <div class="bg-light p-30">
                                        <div class="nav nav-tabs mb-4">
                                            <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                                            <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                                            <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab-pane-1">
                                                <h4 class="mb-3">Product Description</h4>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <div class="tab-pane fade" id="tab-pane-2">
                                                <h4 class="mb-3">Additional Information</h4>
                                                <p>{{ $item->information }}</p>
                                            </div>
                                            <div class="tab-pane fade" id="tab-pane-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="mb-4">1 review for "Product Name"</h4>
                                                        <div class="media mb-4">
                                                            <img src="{{ asset('frontend/img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                                            <div class="media-body">
                                                                <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                                                <div class="text-primary mb-2">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star-half-alt"></i>
                                                                    <i class="far fa-star"></i>
                                                                </div>
                                                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="mb-4">Leave a review</h4>
                                                        <small>Your email address will not be published. Required fields are marked *</small>
                                                        <div class="d-flex my-3">
                                                            <p class="mb-0 mr-2">Your Rating * :</p>
                                                            <div class="text-primary">
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="message">Your Review *</label>
                                                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Your Name *</label>
                                                                <input type="text" class="form-control" id="name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Your Email *</label>
                                                                <input type="email" class="form-control" id="email">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary add-to-cart-from-modal-btn">Add to Cart</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product view modal end -->

@endsection

