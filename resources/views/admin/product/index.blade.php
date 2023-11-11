@extends('admin.master')


@section('body')
    <div class="col-md-12">
        <div class="container">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Product</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product Form</h4>
                </div>
                <div class="card-body">
                    <p class="text-center" data-timeout>{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('product.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" id="categoryId" class="form-control" required>
                                    <option disabled selected> -- Select Product Category -- </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="productName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" required name="brand_id">
                                    <option disabled selected> -- Select Product Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="productName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Product Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="productName" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="productCode" name="code"
                                    placeholder="Product Code" />
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description" placeholder="Short Description"></textarea>
                                <span
                                    class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Long Description"></textarea>
                                <span
                                    class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Product Regular Price"
                                        name="regular_price" />
                                    <input type="number" class="form-control" placeholder="Product Selling Price"
                                        name="selling_price" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Stock Status</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="Product Stock Amount"
                                        name="stock_amount" />
                                    <input type="number" class="form-control" placeholder="Product Reorder Amount"
                                        name="reorder_level" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Image</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="file" class="form-control" name="image" style="height: auto;" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Other Image</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input  type="file" class="form-control" name="other_image[]" multiple />
                                </div>
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <button class="btn btn-primary">Create New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
