
@extends('admin.layouts.master')

@section('title', 'Product')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Product</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
        </div>
    </div>
</div>

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

<div class="card">
    <div class="card-header">
        <h2>Products List</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm mb-3" title="Add New Product">
            Add New Product
        </a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>SL</th>
                        <th>Actions</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Sizes</th>
                        <th>Colors</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Old Price</th>
                        <th>Description</th>
                        <th>Sub Description</th>
                        <th>Information</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ route('products.show', $product) }}" class="btn btn-primary btn-sm action-btn">View</a>
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm action-btn">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm action-btn" title="Delete product" onclick="return confirm('Confirm delete?')">Delete</button>
                                </form>
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>


                            <td>
                                <img style="height: 50px; width: 80px;" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            </td>

                            <td>{{ implode(', ', $product->sizes) }}</td>
                            <td>{{ implode(', ', $product->colors) }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->sub_title }}</td>
                            <td>{{ optional($product->category)->name }}</td>
                            <td>{{ optional($product->subcategory)->name }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->sub_description }}</td>
                            <td>{{ $product->information }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
