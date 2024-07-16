@extends('admin.layouts.master')

@section('title', 'menpent List')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">menpent List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">menpent List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

            <div class="card">
                <div class="card-header">
                    <h2>Formal Shirt</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('admin/menpent/create') }}" class="btn btn-success btn-sm" title="Add New menpent">
                        Add New
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>New Price</th>
                                    <th>Old Price</th>
                                    <th>Small Description</th>
                                    <th>Image</th>
	                                <th>large Description</th>
	                                <th>Information</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menpents as $menpent)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $menpent->name }}</td>
                                    <td>{{ $menpent->price }}</td>
                                    <td>{{ $menpent->old_price }}</td>
                                    <td>{{ $menpent->subtitle }}</td>
                                    <td><img class="admin-index-img" src="{{ asset('storage/'. $menpent->image) }}" alt="{{ $menpent->title }}" width="100"></td>
                                    <td>{{ $menpent->description }}</td>
                                    <td>{{ $menpent->information }}</td>

                                    <td>
                                        <a href="{{ url('admin/menpent/' . $menpent->id) }}" title="View menpent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('admin/menpent/' . $menpent->id . '/edit') }}" title="Edit menpent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('admin/menpent' . '/' . $menpent->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete menpent" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection




