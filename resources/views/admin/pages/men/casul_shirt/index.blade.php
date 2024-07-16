@extends('admin.layouts.master')

@section('title', 'Cshirt List')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Cshirt List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Cshirt List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Casul Shirt</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('admin/cshirt/create') }}" class="btn btn-success btn-sm" title="Add New Cshirt">
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
                                    <th>Price</th>
                                    <th>Small Description</th>
                                    <th>Image</th>
	                                <th>large Description</th>
	                                <th>Information</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cshirts as $cshirt)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cshirt->name }}</td>
                                    <td>{{ $cshirt->price }}</td>
                                    <td>{{ $cshirt->subtitle }}</td>
                                    <td><img class="admin-index-img" src="{{ asset('storage/'. $cshirt->image) }}" alt="{{ $cshirt->title }}" width="100"></td>
                                    <td>{{ $cshirt->description }}</td>
                                    <td>{{ $cshirt->information }}</td>

                                    <td>
                                        <a href="{{ url('admin/cshirt/' . $cshirt->id) }}" title="View cshirt"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('admin/cshirt/' . $cshirt->id . '/edit') }}" title="Edit cshirt"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('admin/cshirt' . '/' . $cshirt->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete cshirt" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
