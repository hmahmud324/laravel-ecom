@extends('admin.master')

@section('body')
 <div class="col-md-12">
    <div class="container">
        <div class="page-header">
            <div>
              <h1 class="page-title">Hero Slider</h1>
            </div>
            <div class="ms-auto pageheader-btn ">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Hero Slider</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Hero Slider</li>
              </ol>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
              <h4 class="card-title">Edit Hero Slider Form</h4>
            </div>
            <div class="card-body">
              <p class="text-center" data-timeout>{{ session('success') }}</p>
              <form class="form-horizontal" action="{{ route('hero-slider.update', ['id' => $hero_slider->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                  <label for="inputProduct" class="col-md-3 form-label">Product</label>
                  <div class="col-md-9">
                      <select class="form-control" id="inputProduct" name="product_id">
                          @foreach ($products as $product)
                          <option value="{{ $product->id }}"  @selected($product->id == $hero_slider->product_id )>{{ $product->name }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <div class=" row mb-4">
                    <label for="inputTitle" class="col-md-3 form-label">Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="inputTitle" name="title"
                           placeholder="Title" value="{{ $hero_slider->title }}" />
                        <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : ' ' }}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="inputSubtitle" class="col-md-3 form-label">Subtitle</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="inputSubtitle" name="subtitle"
                           placeholder="Subtitle" value="{{ $hero_slider->subtitle }}" />
                        <span class="text-danger">{{ $errors->has('subtitle') ? $errors->first('subtitle') : ' ' }}</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="inputDiscountImage" class="col-md-3 form-label">Image</label>
                    <div class="col-md-9">
                        <div class="input-group">
                           <input type="file" class="dropify" name="image" style="height: auto; max-width: 100%;" />
                           <img src="{{ asset($hero_slider->image) }}" alt="" height="100" width="120"
                           style="max-width: 100%" />
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <label for="inputDiscount" class="col-md-3 form-label">Discount</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="inputDiscount" name="discount"
                           placeholder="Discount" value="{{ $hero_slider->discount }}" />
                        <span class="text-danger">{{ $errors->has('discount') ? $errors->first('discount') : ' ' }}</span>
                    </div>
                </div>
                <div class="mb-0 mt-4 row justify-content-end">
                    <div class="col-md-9">
                        <button class="btn btn-primary">Update Hero Slider</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
 </div>
 @push('drop')
 $(document).ready(function() {
     $('.dropify').dropify();
   });
 @endpush
@endsection
