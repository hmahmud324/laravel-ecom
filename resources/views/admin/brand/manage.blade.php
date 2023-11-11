@extends('admin.master')

@section('body')
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Brand</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Brand</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Brand Info</h3>
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
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td>{{ $brand->status == 1 ? 'Published' : 'Unpublshed' }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('brand.edit', $brand->id) }}"
                                                    class="btn btn-success btn-sm rounded-11 me-2" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit Brand">
                                                    <i class="fa fa-edit" style=" font-size: .95rem;"></i>
                                                </a>
                                                <a href="{{ route('brand.delete', ['id' => $brand->id]) }}"
                                                    data-bs-toggle="tooltip" value="success alert"
                                                    data-bs-original-title="Delete Category"
                                                    class="btn btn-danger  rounded-11 me-2" onclick="return confirm('Are you sure to delete this...');">
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
