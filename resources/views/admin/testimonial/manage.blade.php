@extends('admin.master')

@section('body')
    <div class="row row-sm">
        <div class="col-md-12">
            <div class="container">
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Testimonial</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Testimonial</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Testimonial Info</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">{{ session('success') }}</p>
                        <div class="table-responsive export-table">
                            <table id="file-datatable"
                                class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL NO</th>
                                        <th class="border-bottom-0">Text</th>
                                        <th class="border-bottom-0">Author Name</th>
                                        <th class="border-bottom-0">Author Role</th>
                                        <th class="border-bottom-0">Image</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $testimonial->text }}</td>
                                            <td>{{ $testimonial->author_name }}</td>
                                            <td>{{ $testimonial->author_role }}</td>
                                            <td>{{ $testimonial->text }}</td>
                                            <td><img src="{{ asset($testimonial->image) }}" alt="" height="50"
                                                    width="70" /></td>
                                            <td>{{ $testimonial->status == 1 ? 'Published' : 'Unpublshed' }}</td>
                                            <td>
                                                <a href="{{ route('testimonial.edit', ['id' => $testimonial->id]) }}"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit Testimonial"
                                                    class="btn btn-success  rounded-11 me-2">
                                                    <i class="fa fa-edit" style=" font-size: .95rem;"></i>
                                                </a>
                                                <a href="{{ route('testimonial.delete', ['id' => $testimonial->id]) }}"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete Testimonial"
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
