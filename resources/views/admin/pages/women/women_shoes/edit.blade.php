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
                    <div class="card-header">Edit womenshoe</div>

                    <div class="card-body">
                        <form action="{{ route('womenshoe.update', $womenshoe->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{$womenshoe->id}}" />
                            <label>Name</label><br>
                            <input type="text" name="name" id="name" value="{{$womenshoe->name}}" class="form-control"><br>
                            <label>New price</label><br>
                            <input type="text" name="price" id="price" value="{{$womenshoe->price}}" class="form-control"><br>
                            <label>Old price</label><br>
                            <input type="text" name="old_price" id="old_price" value="{{$womenshoe->old_price}}" class="form-control"><br>
                            <label>subtitle</label><br>
                            <input type="text" name="subtitle" id="subtitle" value="{{$womenshoe->subtitle}}" class="form-control"><br>
                            <label>Image</label><br>
                            <input type="file" name="image" id="image" class="form-control"><br>
                            <label>description</label><br>
                            <input type="text" name="description" id="description" value="{{$womenshoe->description}}" class="form-control"><br>
                            <label>information</label><br>
                            <input type="text" name="information" id="information" value="{{$womenshoe->information}}" class="form-control"><br>
                            <input type="submit" value="Update" class="btn btn-success"><br>
                        </form>
                    </div>
                </div>

@endsection


