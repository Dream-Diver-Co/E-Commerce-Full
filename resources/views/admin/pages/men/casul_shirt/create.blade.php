@extends('admin.layouts.master')

@section('title', 'Create New Cshirt')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Create New Cshirt</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Create New Cshirt</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="card">
    <div class="card-header">Create New Cshirt</div>
    <div class="card-body">
        <form action="{{ url('admin/cshirt') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>price</label><br>
            <input type="text" name="price" id="price" class="form-control"><br>
            <label>Small description </label><br>
            <input type="text" name="subtitle" id="subtitle" class="form-control"><br>
            <label>image</label><br>
            <input type="file" name="image" id="image" class="form-control"><br>
            <label>description</label><br>
            <textarea name="description" id="description" class="form-control" cols="30" rows="0"></textarea><br>
            <label>information</label><br>
            <textarea name="information" id="information" class="form-control" cols="30" rows="0"></textarea><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection
