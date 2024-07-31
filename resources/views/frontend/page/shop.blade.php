@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            @foreach($categories as $category)
            <div class="col-lg-6 mb-3">
                <div class="carousel-item position-relative active" style="height: 430px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $category->name }}</h1>
                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $category->description }}</p>
                            <p>
                                Subcategories:
                                <a href="{{ route('categories.subcategories', $category->id) }}">
                                    {{ $category->subcategories_count }}
                                </a>
                            </p>
                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('men') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->

@endsection

