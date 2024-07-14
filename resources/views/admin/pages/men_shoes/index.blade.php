@extends('admin.layouts.master')

@section('title', 'menshoes List')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">menshoes List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">menshoes List</li>
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
                    <h2>Formal Shirt</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('admin/menshoes/create') }}" class="btn btn-success btn-sm" title="Add New menshoes">
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
                                @foreach($menshoess as $menshoes)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $menshoes->name }}</td>
                                    <td>{{ $menshoes->price }}</td>
                                    <td>{{ $menshoes->old_price }}</td>
                                    <td>{{ $menshoes->subtitle }}</td>
                                    <td><img class="admin-index-img" src="{{ asset('storage/'. $menshoes->image) }}" alt="{{ $menshoes->title }}" width="100"></td>
                                    <td>{{ $menshoes->description }}</td>
                                    <td>{{ $menshoes->information }}</td>

                                    <td>
                                        <a href="{{ url('admin/menshoes/' . $menshoes->id) }}" title="View menshoes"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('admin/menshoes/' . $menshoes->id . '/edit') }}" title="Edit menshoes"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('admin/menshoes' . '/' . $menshoes->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete menshoes" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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




