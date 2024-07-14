@extends("frontend.layouts.master")

@section("content")

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('index') }}">Home</a>
                    <span class="breadcrumb-item active">Product Details</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ asset('storage/' . $product->image) }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{ $product->name }}</h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <!-- Assuming you have a rating field in both models -->
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $product->rating)
                                    <small class="fas fa-star"></small>
                                @else
                                    <small class="far fa-star"></small>
                                @endif
                            @endfor
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4">{{ $product->price }}</h3>
                    <p class="mb-4">{{ $product->subtitle }}</p>
                    <!-- Other details specific to each product type -->
                    @if ($product instanceof App\Models\Panjabi)
                        <!-- Display Punjabi specific details -->
                        <p>{{ $product->description }}</p>
                    @elseif ($product instanceof App\Models\Cshirt)
                        <!-- Display Casual Shirt specific details -->
                        <p>{{ $product->description }}</p>
                    @endif
                    <!-- Common details (sizes, colors, add to cart button, etc.) can be shared -->

                    <!-- Example of sizes for Punjabi -->
                    @if ($product instanceof App\Models\Panjabi)
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">Sizes:</strong>
                            <!-- Render sizes for Punjabi -->
                            <!-- Add your logic here for rendering sizes for Punjabi -->
                        </div>
                    @endif

                    <!-- Example of sizes for Casual Shirt -->
                    @if ($product instanceof App\Models\Cshirt)
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">Sizes:</strong>
                            <!-- Render sizes for Casual Shirt -->
                            <!-- Add your logic here for rendering sizes for Casual Shirt -->
                        </div>
                    @endif

                    <!-- Add to Cart button and other common elements -->

                </div>
            </div>
        </div>
    </div>
    <!-- Product Details End -->

@endsection
