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

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2"> --}}
                <div class="card">
                    <div class="card-header">blazer Details</div>

                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $blazer->name }}</h5>
                        <p class="card-text">New Price: {{ $blazer->price }}</p>
                        <p class="card-text">Old price: {{ $blazer->old_price }}</p>
                        <p class="card-text">Small Description: {{ $blazer->subtitle }}</p>
                        <p class="card-text">Image: <img src="{{ asset('storage/' . $blazer->image) }}" alt="{{ $blazer->name }}" width="100"></p>
                        <p class="card-text">Large Description: {{ $blazer->description }}</p>
                        <p class="card-text">Information: {{ $blazer->information }}</p>

                        <a href="{{ route('blazer.edit', $blazer->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('blazer.destroy', $blazer->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blazer?')">Delete</button>
                        </form>
                        <a href="{{ route('blazer.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
@endsection


