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

<h1>Products</h1>
<a href="{{ route('products.create') }}">Add New Product</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Title</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Sizes</th>
            <th>Colors</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ optional($product->category)->name }}</td>
                <td>{{ optional($product->subcategory)->name }}</td>
                <td>{{ implode(', ', $product->sizes) }}</td>
                <td>{{ implode(', ', $product->colors) }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}">View</a>
                    <a href="{{ route('products.edit', $product) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
