@extends('admin.master')


@section('body')
    <div class="col-md-12">
        <div class="container">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Product</h1>
                </div>
                <div class="ms-auto pageheader-btn  magic-hover magic-hover__square">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Product Form</h4>
                </div>
                <div class="card-body">
                    <p class="text-center" data-timeout>{{ session('message') }}</p>
                    <form class="form-horizontal" action="{{ route('product.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control select2" required>
                                    <option disabled selected> -- Select Product Category -- </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="productName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control select2" required name="brand_id">
                                    <option disabled selected> -- Select Product Brand --</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>{{ $brand->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="productName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control select2" value="{{ $product->name }}" name="name"
                                    placeholder="Product Name" />
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label for="productName" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $product->code }}" id="productCode"
                                    name="code" placeholder="Product Code" />
                                <span class="text-danger">{{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description" placeholder="Short Description">{{ $product->short_description }}</textarea>
                                <span
                                    class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                            </div>
                        </div>
                        <div class=" row mb-4">
                            <label class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Long Description">{{ $product->long_description }}</textarea>
                                <span
                                    class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" value="{{ $product->regular_price }}"
                                        placeholder="Product Regular Price" name="regular_price" />
                                    <input type="number" class="form-control" value="{{ $product->selling_price }}"
                                        placeholder="Product Selling Price" name="selling_price" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Stock Status</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="number" class="form-control" value="{{ $product->stock_amount }}"
                                        placeholder="Product Stock Amount" name="stock_amount" />
                                    <input type="number" class="form-control" value="{{ $product->reorder_level }}"
                                        placeholder="Product Reorder Amount" name="reorder_level" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" style="height: auto; max-width: 100%;" />
                                <img src="{{ asset($product->image) }}" alt="" height="100" width="120"
                                    style="max-width: 100%" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Other Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="other_image[]"
                                    style="height: auto;max-width: 100%;" multiple />
                                @foreach ($product->otherImages as $otherImage)
                                    <img src="{{ asset($otherImage->image) }}" alt="" height="100"
                                        width="120" style="max-width: 100%" />
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-0 mt-4 row justify-content-end">
                            <div class="col-md-9">
                                <button class="btn btn-primary">Update Product Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection
