@extends("frontend.layouts.master")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                <span class="breadcrumb-item active">Subcategory Shop List</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Men Recent Products</span></h2>
    <div class="row px-xl-5">
        @foreach($category->subCategories as $subCategory)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 300px; width: 300px;"  src="{{ asset('storage/' . $subCategory->image) }}" alt="{{ $subCategory->name }}">
                    <div class="product-action">
                        <a href="{{ route('subcategories.products', $subCategory->id) }}" class="btn btn-primary">Shop Now</a>
                        {{-- <p>
                            Products:
                            <a href="{{ route('subcategories.products', $subCategory->id) }}">
                                Products{{ $subCategory->products_count }}
                            </a>
                        </p> --}}
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('subcategories.products', $subCategory->id) }}">{{ $subCategory->name }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Products End -->

@endsection

