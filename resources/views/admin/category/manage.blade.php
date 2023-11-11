@extends('admin.master')

@section('body')
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Category</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Category Info</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">{{ session('message') }}</p>
                        <div class="table-responsive export-table">
                            <table id="file-datatable"
                                class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL NO</th>
                                        <th class="border-bottom-0">Name</th>
                                        <th class="border-bottom-0">Image</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td><img src="{{ asset($category->image) }}" alt="" height="50"
                                                    width="70" /></td>
                                            <td>{{ $category->status == 1 ? 'Published' : 'Unpublshed' }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Category"
                                                    class="btn btn-success  rounded-11 me-2">
                                                    <i class="fa fa-edit" style=" font-size: .95rem;"></i>
                                                </a>
                                                <a href="{{ route('category.delete', ['id' => $category->id]) }}"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete Category"
                                                    class="btn btn-danger  rounded-11 me-2"
                                                    onclick="return confirm('Are you sure to delete this...');">
                                                    <i class="fa fa-trash" style=" font-size: .95rem;"></i>
                                                </a>
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
