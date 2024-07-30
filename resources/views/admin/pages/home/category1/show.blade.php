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
        <div class="card-header">Category Details</div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $category->title }}</h5>
            <p class="card-text">Slug: {{ $category->slug }}</p>
            <p class="card-text">Continuity: {{ $category->continuity }}</p>
            @if($category->image)
                <p class="card-text">Image:</p>
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" width="200">
            @endif
            <a href="{{ route('category.index') }}" class="btn btn-primary mt-3">Back to List</a>
        </div>
    </div>
@endsection


