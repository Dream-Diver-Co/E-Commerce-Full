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


<div class="card" style="margin:20px;">
  <div class="card-header">Edit Winter</div>
  <div class="card-body">

      <form action="{{ url('admin/winter/' .$winters->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$winters->id}}" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$winters->title}}" class="form-control"></br>
        <label>Subtitle</label></br>
        <input type="text" name="subtitle" id="subtitle" value="{{$winters->subtitle}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        @if($winters->image)
        <img src="{{ asset('storage/'. $winters->image) }}" alt="{{ $winters->title }}" width="100">
        @endif
        </br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$winters->date}}" class="form-control"></br>
        <label>File</label></br>
        <input type="file" name="file" id="file" value="{{$winters->file}}" class="form-control"></br>
        <label>Note</label></br>
        <input type="text" name="note" id="note" value="{{$winters->note}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>


@endsection

