@extends('admin.layouts.master')

@section('title', 'Profile')
@section('content')

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

<div class="card">
    <div class="card-header">Create Product</div>
    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <label for="category_id">Category Select <i class="fa-solid fa-caret-down"></i></label><br>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name ?? 'Unnamed Category' }}</option>
                        @endforeach
                    </select><br>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required><br>
                    <label for="image">Image</label><br>
                    <input type="file" name="image" id="image" class="form-control"><br>
                    <label for="price">Price</label><br>
                    <input type="number" name="price" id="price" step="0.01" class="form-control" required><br>

                    {{-- <label for="sizes">Sizes</label><br>
                    <div id="size-inputs">
                        <input type="text" name="sizes[]" class="form-control" required>
                    </div>
                    <button type="button" id="add-size">Add Size</button><br><br> --}}

                    <div class="form-group">
                        <label for="sizes">Sizes</label><br>
                        <div class="input-group" id="size-inputs">
                            <span><button type="button" id="add-size" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i></button></span>
                            <input type="text" name="sizes[]" class="form-control" required>
                        </div><br>
                    </div>
                    {{-- <div class="form-group">
                        <label for="sizes">Sizes</label><br>
                        <div class="input-group" id="size-inputs">
                            <input type="text" name="sizes[]" class="form-control" required>
                            <span>
                                <button type="button" id="add-size" class="btn btn-primary">
                                    <i class="fa-solid fa-square-plus"></i>
                                </button>
                            </span>
                        </div><br>
                    </div> --}}


                    <label for="description">Description</label><br>
                    <textarea name="description" id="description" class="form-control"></textarea><br>
                    <label for="information">Information</label><br>
                    <textarea name="information" id="information" class="form-control"></textarea><br>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <label for="subcategory_id">Subcategory Select <i class="fa-solid fa-caret-down"></i></label><br>
                    <select name="subcategory_id" id="subcategory_id" class="form-control" required>
                        @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name ?? 'Unnamed Subcategory' }}</option>
                        @endforeach
                    </select><br>
                    <label for="title">Title</label><br>
                    <input type="text" name="title" id="title" class="form-control" required><br>
                    <label for="sub_title">Sub Title</label><br>
                    <input type="text" name="sub_title" id="sub_title" class="form-control" required><br>
                    <label for="old_price">Old Price</label><br>
                    <input type="number" name="old_price" id="old_price" step="0.01" class="form-control"><br>
                    <label for="colors">Colors</label><br>
                    <div id="color-inputs">
                        <input type="text" name="colors[]" class="form-control" required>
                    </div>
                    <button type="button" id="add-color">Add Color</button><br><br>
                    <label for="sub_description">Sub Description</label><br>
                    <textarea name="sub_description" id="sub_description" class="form-control"></textarea><br>

                </div>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
</div>


{{-- <script>
    document.getElementById('add-size').addEventListener('click', function() {
        var sizeInputs = document.getElementById('size-inputs');
        if (sizeInputs.children.length < 12) { // Considering input and span as children
            var newInputGroup = document.createElement('div');
            newInputGroup.className = 'input-group mb-2'; // Add class for spacing

            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'sizes[]';
            newInput.className = 'form-control';
            newInput.required = true;

            // Append the new input and button to the new input group
            newInputGroup.appendChild(newInput);

            // Insert the new input group before the button span
            sizeInputs.insertBefore(newInputGroup, sizeInputs.lastElementChild);
        }
    });
</script> --}}

<script>
    document.getElementById('add-size').addEventListener('click', function() {
        var sizeInputs = document.getElementById('size-inputs');
        if (sizeInputs.children.length < 6) {
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'sizes[]';
            newInput.className = 'form-control'; // Add class for consistent styling and spacing
            newInput.required = true; // Ensure it's marked as required
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
