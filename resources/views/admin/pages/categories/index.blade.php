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

<h1>Categories</h1>
<a href="{{ route('categories.create') }}">Create Category</a>
<ul>
    @foreach($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            <span>{{ $category->subcategories_count }} Subcategories</span>
            <a href="{{ route('categories.show', $category) }}">view</a>
            <a href="{{ route('categories.edit', $category) }}">Edit</a>
            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection



