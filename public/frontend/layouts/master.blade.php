
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dream Ecommerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Dream Shop" name="keywords">
    <meta content="Dream Shop" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/add-to-card.css') }}" rel="stylesheet">

</head>

<body>

    {{-- header start --}}
    @include("frontend.partials.header")
    {{-- header end --}}


    @yield("content")

    <div id="successMessage" style="display:none; position: fixed; top: 10px; right: 10px; background-color: green; color: white; padding: 10px; border-radius: 5px;"></div>


    <!-- Modal start -->
    <section>
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
                        <div class="row px-xl-5">
                            <div class="col-lg-5 mb-30">
                                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner bg-light">
                                        <div class="carousel-item active">
                                            <!-- <img class="w-100 h-100" src="{{ asset('frontend/img/product-1.jpg') }}" alt="Image"> -->
                                            <img id="itemModalImage" src="" alt="Item Image" style="width: 100%; height: auto;">
                                        </div>
                                        <!-- <div class="carousel-item">
                                            <img class="w-100 h-100" src="{{ asset('frontend/img/product-2.jpg') }}" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="w-100 h-100" src="{{ asset('frontend/img/product-3.jpg') }}" alt="Image">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="w-100 h-100" src="{{ asset('frontend/img/product-4.jpg') }}" alt="Image">
                                        </div> -->
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
                                    <p class="mb-4">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                                        clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                                        Nonumy</p>
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
                                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                                            <p>Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab-pane-2">
                                            <h4 class="mb-3">Additional Information</h4>
                                            <p>Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item px-0">
                                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                                        </li>
                                                      </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item px-0">
                                                            Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                                        </li>
                                                      </ul>
                                                </div>
                                            </div>
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
                    <!-- <div class="modal-body">
                        <img id="itemModalImage" src="" alt="Item Image" style="width: 100%; height: auto;">
                        <h4 id="itemModalName"></h4>
                        <p id="itemModalPrice"></p>
                        <p id="itemModalMiles"></p>
                        <p id="itemModalCondition"></p>
                        <p id="itemModalTransmission"></p>
                        <p id="itemModalHp"></p>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary add-to-cart-from-modal-btn">Add to Cart</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product view modal end -->

        <!-- Cart modal start -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-card">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Your Cart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-pd">
                        <table class="show-cart table"></table>
                        <div class="grand-total">Total price: $<span class="total-cart"></span></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="checkout.html" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart modal end -->

        <!-- Wishlist Modal start-->
        <div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="wishlistModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="wishlistModalLabel">Wishlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="wishlist-items">
                            <!-- Wishlist items will be added here by JavaScript -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Modal end-->
    </section>
    <!-- Modal End -->



    <!-- Footer Start -->
    @include("frontend.partials.footer")
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/add-to-card.js') }}"></script>
    <script src="{{ asset('frontend/js/wishlist.js') }}"></script>
</body>

</html>
