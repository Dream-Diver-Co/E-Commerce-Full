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
                    <div class="card-header">kameez Details</div>

                    <div class="card-body">
                        <h5 class="card-title">Name: {{ $kameez->name }}</h5>
                        <p class="card-text">New Price: {{ $kameez->price }}</p>
                        <p class="card-text">Old price: {{ $kameez->old_price }}</p>
                        <p class="card-text">Small Description: {{ $kameez->subtitle }}</p>
                        <p class="card-text">Image: <img src="{{ asset('storage/' . $kameez->image) }}" alt="{{ $kameez->name }}" width="100"></p>
                        <p class="card-text">Large Description: {{ $kameez->description }}</p>
                        <p class="card-text">Information: {{ $kameez->information }}</p>

                        <a href="{{ route('kameez.edit', $kameez->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('kameez.destroy', $kameez->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this kameez?')">Delete</button>
                        </form>
                        <a href="{{ route('kameez.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
@endsection


