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
                    <div class="card-header">food Details</div>

                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $food->name }}</h5>
                        <p class="card-text">New Price: {{ $food->price }}</p>
                        <p class="card-text">Old price: {{ $food->old_price }}</p>
                        <p class="card-text">Small Description: {{ $food->subtitle }}</p>
                        <p class="card-text">Image: <img src="{{ asset('storage/' . $food->image) }}" alt="{{ $food->name }}" width="100"></p>
                        <p class="card-text">Large Description: {{ $food->description }}</p>
                        <p class="card-text">Information: {{ $food->information }}</p>

                        <a href="{{ route('food.edit', $food->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('food.destroy', $food->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this food?')">Delete</button>
                        </form>
                        <a href="{{ route('food.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
@endsection


