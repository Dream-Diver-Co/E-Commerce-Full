
@extends('admin.layouts.master')

@section('title', 'SubCategory')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">SubCategories</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">SubCategories</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<!-- success message -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Check for success message -->
            @if(session('success'))
                <div id="success-message" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>
<!-- success message -->

<div class="card">
    <div class="card-header">Create New SubCategories</div>
    <div class="card-body">
        <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="category_id">Category Select <i class="fa-solid fa-caret-down"></i></label><br>
            <select name="category_id" id="category_id" class="form-control" required><br>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select><br>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" class="form-control" required><br>
            <label for="image">Image</label><br>
            <input type="file" name="image" id="image" class="form-control" required><br>
            <label for="description">Description</label><br>
            <textarea name="description" id="description" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Save</button><br>
        </form>
    </div>
</div>

<script>
    // Auto-hide the success message after 5 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        }
    });
</script>

@endsection
