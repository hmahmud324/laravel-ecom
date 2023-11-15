@extends('admin.master')

@section('body')
   <div class="row row-sm">
       <div class="col-md-12">
           <div class="container">
               <div class="page-header">
                  <div>
                      <h1 class="page-title">Hero Slider</h1>
                  </div>
                  <div class="ms-auto pageheader-btn">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0);">Hero Slider</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Manage Hero Slider</li>
                      </ol>
                  </div>
               </div>
           </div>
           <div class="container mt-3">
               <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">All Hero Slider Info</h3>
                  </div>
                  <div class="card-body">
                      <p class="text-muted">{{ session('success') }}</p>
                      <div class="table-responsive export-table">
                          <table id="file-datatable"
                              class="table table-bordered text-nowrap key-buttons border-bottom w-100">
                              <thead>
                                 <tr>
                                     <th class="border-bottom-0">SL NO</th>
                                     <th class="border-bottom-0">Title</th>
                                     <th class="border-bottom-0">Subtitle</th>
                                     <th class="border-bottom-0">Image</th>
                                     <th class="border-bottom-0">Discount</th>
                                     <th class="border-bottom-0">Status</th>
                                     <th class="border-bottom-0">Featured_Status</th>
                                     <th class="border-bottom-0">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach ($hero_sliders as $hero_slider)
                                     <tr>
                                         <td>{{ $loop->iteration }}</td>
                                         <td>{{ $hero_slider->title }}</td>
                                         <td>{{ $hero_slider->subtitle }}</td>
                                         <td><img src="{{ asset($hero_slider->image) }}" alt="" height="50"
                                                width="70" /></td>
                                         <td>{{ $hero_slider->discount }}</td>
                                         <td>{{ $hero_slider->status == 1 ? 'Published' : 'Unpublshed' }}</td>
                                         <td>{{ $hero_slider->featured_status == 1 ? 'Featured' : 'Not featured' }}</td>
                                         <td class="d-flex">
                                             <a href="{{ route('hero-slider.edit', ['id' => $hero_slider->id]) }}"
                                                data-bs-toggle="tooltip" data-bs-original-title="Edit Hero Slider"
                                                class="btn btn-success rounded-11 me-2">
                                                <i class="fa fa-edit" style=" font-size: .95rem;"></i>
                                             </a>
                                             <a href="{{ route('hero-slider.delete', ['id' => $hero_slider->id]) }}"
                                                data-bs-toggle="tooltip" data-bs-original-title="Delete Hero Slider"
                                                class="btn btn-danger rounded-11 me-2"
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
