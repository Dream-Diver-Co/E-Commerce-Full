@extends('admin.layouts.master')

@section('title', 'View Cshirt')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">View Cshirt</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cshirt.index') }}">Cshirt List</a></li>
                    <li class="breadcrumb-item active">View Cshirt</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="card">
    <div class="card-header">Cshirt Details</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $cshirt->name }}</h5>
        <p class="card-text">Price: {{ $cshirt->price }}</p>
        <p class="card-text">Small Description: {{ $cshirt->subtitle }}</p>
        <p class="card-text">Image: <img src="{{ asset('storage/' . $cshirt->image) }}" alt="{{ $cshirt->name }}" width="100"></p>
        <p class="card-text">Large Description: {{ $cshirt->description }}</p>
        <p class="card-text">Information: {{ $cshirt->information }}</p>
    </div>
</div>

@endsection
