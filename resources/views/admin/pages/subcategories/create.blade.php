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
<div class="card">
    <div class="card-header">Create New Hero</div>
    <div class="card-body">

    </div>
</div>
    <h1>Create Subcategory</h1>
    <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Create</button>
    </form>
@endsection


