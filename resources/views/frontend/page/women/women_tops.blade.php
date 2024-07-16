@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('women') }}">Women</a>
                    <span class="breadcrumb-item active">Tops List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


  <!-- Products Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">womentop Shirt Featured Products</span></h2>
    <div class="row px-xl-5">
        @foreach($womentops as $womentop)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('storage/'. $womentop->image) }}" alt="{{ $womentop->name }}">
                    <div class="product-action">
                        <a href="#" class="btn btn-outline-dark btn-square view-item-btn"
                            data-toggle="modal"
                            data-target="#itemModal"
                            data-id="{{ $womentop->id }}"
                            data-name="{{ $womentop->name }}"
                            data-price="{{ $womentop->price }}"
                            data-image="{{ asset('storage/'. $womentop->image) }}"
                            data-subtitle="{{ $womentop->subtitle }}"
                            data-description="{{ $womentop->description }}"
                            data-information="{{ $womentop->information }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="{{ $womentop->name }}" data-price="{{ $womentop->price }}" data-image="{{ asset('storage/'. $womentop->image) }}" href="#"><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square add-btn add-to-cart-btn" data-name="{{ $womentop->name }}" data-price="{{ $womentop->price }}" data-image="{{ asset('storage/'. $womentop->image) }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{ $womentop->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{ $womentop->price }}</h5>
                        @if($womentop->old_price)
                            <h6 class="text-muted ml-2"><del>${{ $womentop->old_price }}</del></h6>
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
    {{ $womentops->links('pagination::bootstrap-4') }}
</div>

@endsection

