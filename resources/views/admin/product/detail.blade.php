@extends('admin.master')

@section('body')
    <div class="row row-sm">
        <div class="col-md-12">
           <div class="container">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Detail Information</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom  w-100">
                            <tr>
                                <th>Product Id</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{$product->code}}</td>
                            </tr>
                            <tr>
                                <th>Product Category</th>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Brand</th>
                                <td>{{$product->brand->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{$product->short_description}}</td>
                            </tr>
                            <tr>
                                <th>Product Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>
                            <tr>
                                <th>Product Regular Price</th>
                                <td>{{$product->regular_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Selling Price</th>
                                <td>{{$product->selling_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <td>{{$product->stock_amount}}</td>
                            </tr>
                            <tr>
                                <th>Product Reorder Level</th>
                                <td>{{$product->reorder_level}}</td>
                            </tr>
                            <tr>
                                <th>Product Main Image</th>
                                <td><img src="{{asset($product->image)}}" alt="" height="100" width="120"/></td>
                            </tr>
                            <tr>
                                <th>Product Other Images</th>
                                <td>
                                    @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" alt="" height="100" width="120"/>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Sales Total</th>
                                <td>{{$product->sales_count}}</td>
                            </tr>
                            <tr>
                                <th>Product View Total</th>
                                <td>{{$product->hit_count}}</td>
                            </tr>
                            <tr>
                                <th>Product Featured Status</th>
                                <td>{{$product->featured_status}}</td>
                            </tr>
                            <tr>
                                <th>Product Published Status</th>
                                <td>{{$product->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
@endsection

