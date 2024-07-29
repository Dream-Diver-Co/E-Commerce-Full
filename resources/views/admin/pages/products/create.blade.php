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

    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="subcategory_id">Subcategory</label>
        <select name="subcategory_id" id="subcategory_id" required>
            @foreach($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="0.01" required>
        <label for="old_price">Old Price</label>
        <input type="number" name="old_price" id="old_price" step="0.01">
        <label for="sub_description">Sub Description</label>
        <textarea name="sub_description" id="sub_description"></textarea>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <label for="information">Information</label>
        <textarea name="information" id="information"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection


