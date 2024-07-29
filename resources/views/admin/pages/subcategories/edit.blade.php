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

    <h1>Edit Subcategory</h1>
    <form action="{{ route('subcategories.update', $subcategory) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $subcategory->name }}" required>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ $subcategory->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection

