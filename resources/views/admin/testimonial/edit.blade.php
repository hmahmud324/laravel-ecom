@extends('admin.master')


@section('body')

<div class="col-md-12">
        <div class="page-header">
            <div class="ms-auto pageheader-btn  magic-hover magic-hover__square">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Testimonial</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Testimonial</li>
                </ol>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Testimonial Form</h4>
            </div>
            <div class="card-body">
                <p class="text-center" data-timeout>{{session('success')}}</p>
                <form class="form-horizontal" action="{{route('testimonial.update',['id' => $testimonial->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class=" row mb-4">
                        <label for="inputEmail3" class="col-md-3 form-label">Text</label>
                        <div class="col-md-9">
                            <textarea  class="form-control" name="text" id="inputEmail3" placeholder="Testimonial Description">{{ $testimonial->text }}</textarea>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Author Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="inputName"  value="{{ $testimonial->author_name }}" name="author_name" placeholder="Testimonial Name"/>
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                        </div>
                    </div>
                     <div class=" row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Author Role</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="inputName" value="{{ $testimonial->author_role }}" name="author_role" placeholder="Testimonial Name"/>
                            <span class="text-danger">{{$errors->has('author_role') ? $errors->first('author_role') : ' '}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Image</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="file" class="dropify"  name="image" style="height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9 me-auto">
                            <button class="btn  btn-primary">Update Testimonial</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection