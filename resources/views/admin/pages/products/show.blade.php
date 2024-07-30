@extends('admin.layouts.master')

@section('title', 'Profile')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

    <h1>{{ $product->name }}</h1>
    <p><strong>Title:</strong> {{ $product->title }}</p>
    <p><strong>Sub Title:</strong> {{ $product->sub_title }}</p>
    <p><strong>Category:</strong> {{ $product->category->name }}</p>
    <p><strong>Subcategory:</strong> {{ $product->subcategory->name }}</p>
    <p><strong>Sizes:</strong> {{ implode(', ', $product->sizes) }}</p>
    <p><strong>Colors:</strong> {{ implode(', ', $product->colors) }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <p><strong>Old Price:</strong> ${{ $product->old_price }}</p>
    <p><strong>Sub Description:</strong> {{ $product->sub_description }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Information:</strong> {{ $product->information }}</p>
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="300">
    @endif
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('products.index') }}">Back to Products</a>
@endsection
