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
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="subcategory_id">Subcategory</label>
        <select name="subcategory_id" id="subcategory_id" required>
            @foreach($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="sub_title">Sub Title</label>
        <input type="text" name="sub_title" id="sub_title" required>

        <label for="sizes">Sizes</label>
        <div id="size-inputs">
            <input type="text" name="sizes[]" required>
        </div>
        <button type="button" id="add-size">Add Size</button>

        <label for="colors">Colors</label>
        <div id="color-inputs">
            <input type="text" name="colors[]" required>
        </div>
        <button type="button" id="add-color">Add Color</button>

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

    <script>
        document.getElementById('add-size').addEventListener('click', function() {
            var sizeInputs = document.getElementById('size-inputs');
            if (sizeInputs.children.length < 6) {
                var newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.name = 'sizes[]';
                sizeInputs.appendChild(newInput);
            }
        });

        document.getElementById('add-color').addEventListener('click', function() {
            var colorInputs = document.getElementById('color-inputs');
            if (colorInputs.children.length < 6) {
                var newInput = document.createElement('input');
                newInput.type = 'text';
                newInput.name = 'colors[]';
                colorInputs.appendChild(newInput);
            }
        });
    </script>
@endsection
