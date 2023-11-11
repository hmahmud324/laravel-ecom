@extends('admin.master')

@section('body')
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Product</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                        </ol>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Product Info</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center" data-timeout>{{ session('message') }}</p>
                            <div class="table-responsive export-table">
                                <table id="file-datatable"
                                    class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">SL NO</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Image</th>
                                            <th class="border-bottom-0">Stock Status</th>
                                            <th class="border-bottom-0">Status</th>
                                            <th class="border-bottom-0">Featured Status</th>
                                            <th class="border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td><img src="{{ asset($product->image) }}" alt="" height="50"
                                                        width="70" /></td>
                                                <td>{{ $product->stock_amount }}</td>
                                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublshed' }}</td>
                                                <td>{{ $product->featured_status == 1 ? 'Featured' : 'Not Featured' }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('product.show', $product->id) }}"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Product Detail"
                                                        class="btn btn-info btn-sm magic-hover magic-hover__square rounded-11 me-2">
                                                        <i class="fa fa-info" style=" font-size: .95rem;"></i>
                                                    </a>
                                                    <a href="{{ route('product.edit', $product->id) }}"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit Product"
                                                        class="btn btn-success btn-sm rounded-11 me-2">
                                                        <i class="fa fa-edit" style=" font-size: .95rem;"></i>
                                                    </a>
                                                    <a href="{{ route('product.update-status', ['id' => $product->id]) }}"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Update Product Status"
                                                        class="btn {{ $product->featured_status == 1 ? 'btn-primary' : 'btn-warning' }} btn-sm  rounded-11 me-2">
                                                        <i class="fa {{ $product->featured_status == 1 ? 'fa-arrow-circle-o-up' : 'fa-arrow-circle-o-down' }}"
                                                            style=" font-size: .95rem;"></i>
                                                    </a>
                                                    <form action="{{ route('product.destroy', $product->id) }}"
                                                        method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-sm rounded-11 me-2"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete Product"
                                                            onclick="return confirm('Are you sure to delete this...');">
                                                            <i class="fa fa-trash" style=" font-size: .95rem;"></i>
                                                        </button>
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
    </div>
@endsection
