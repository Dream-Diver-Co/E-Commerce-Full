@extends('admin.layouts.master')

@section('title', 'Edit Cshirt')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Cshirt</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Edit Cshirt</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Cshirt</div>
    <div class="card-body">
        <form action="{{ url('admin/cshirt/' . $cshirt->id) }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$cshirt->id}}" />
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{$cshirt->name}}" class="form-control"><br>
            <label>price</label><br>
            <input type="text" name="price" id="price" value="{{$cshirt->price}}" class="form-control"><br>
            <label>subtitle</label><br>
            <input type="text" name="subtitle" id="subtitle" value="{{$cshirt->subtitle}}" class="form-control"><br>
            <label>Image</label><br>
            <input type="file" name="image" id="image" class="form-control"><br>
            <label>description</label><br>
            <input type="text" name="description" id="description" value="{{$cshirt->description}}" class="form-control"><br>
            <label>information</label><br>
            <input type="text" name="information" id="information" value="{{$cshirt->information}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection
