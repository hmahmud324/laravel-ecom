@extends('admin.master')


@section('body')
    <div class="col-md-12">
      <div class="container">  
        <div class="page-header">
        <div>
            <h1 class="page-title">Edit Category Info</h1>
        </div>
        <div class="ms-auto pageheader-btn  >
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
            </ol>
        </div>
    </div></div>
       <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Category Form</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Category Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="inputName" value="{{$category->name}}" name="name" placeholder="Category Name"/>
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Category Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control"  name="image" style="height: auto;">
                            <img src="{{asset($category->image)}}" alt="" height="100" width="120"/>
                        </div>
                    </div>
                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9 me-auto">
                            <button class="btn btn-primary">Update Category Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div>
    </div>
@endsection



