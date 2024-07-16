@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index">Home</a>
                    <a class="breadcrumb-item text-dark" href="shop1">Shop</a>
                    <a class="breadcrumb-item text-dark" href="baby">Baby</a>
                    <span class="breadcrumb-item active">Baby Clothing List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


 <!-- Products Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">clothing Shirt Featured Products</span></h2>
    <div class="row px-xl-5">
        @foreach($clothings as $clothing)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('storage/'. $clothing->image) }}" alt="{{ $clothing->name }}">
                    <div class="product-action">
                        <a href="#" class="btn btn-outline-dark btn-square view-item-btn"
                            data-toggle="modal"
                            data-target="#itemModal"
                            data-id="{{ $clothing->id }}"
                            data-name="{{ $clothing->name }}"
                            data-price="{{ $clothing->price }}"
                            data-image="{{ asset('storage/'. $clothing->image) }}"
                            data-subtitle="{{ $clothing->subtitle }}"
                            data-description="{{ $clothing->description }}"
                            data-information="{{ $clothing->information }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="{{ $clothing->name }}" data-price="{{ $clothing->price }}" data-image="{{ asset('storage/'. $clothing->image) }}" href="#"><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="{{ $clothing->name }}" data-price="{{ $clothing->price }}" data-image="{{ asset('storage/'. $clothing->image) }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{ $clothing->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{ $clothing->price }}</h5>
                        @if($clothing->old_price)
                            <h6 class="text-muted ml-2"><del>${{ $clothing->old_price }}</del></h6>
                        @endif
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

  <!-- Pagination Links -->
<div class="d-flex justify-content-center">
    {{ $clothings->links('pagination::bootstrap-4') }}
</div>

@endsection

