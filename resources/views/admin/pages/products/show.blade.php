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
    @if($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200">
    @endif
    <p>Price: ${{ $product->price }}</p>
    <p>Old Price: ${{ $product->old_price }}</p>
    <p>Sub Description: {{ $product->sub_description }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Information: {{ $product->information }}</p>
    <p>Subcategory: {{ $product->subcategory->name }}</p>
    
@endsection


