<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('admin.testimonial.index');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'text' => 'required|unique:testimonials,text',
        ], [
           'text.required'  => 'Testimonial text field is required.',
           'text.unique'    => 'Testimonial text has already been taken.',
        ]);

        Testimonial::newTestimonial($request);
        return back()->with('success', 'Testimonial info created successfully.');
    }

    public function manage()
    {
        return view('admin.testimonial.manage', [
            'testimonials' => Testimonial::all(),
        ]);
    }

    public function edit($id)
    {
        return view('admin.testimonial.edit', [
            'testimonial' => Testimonial::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect('/testimonial/manage/')->with('success', 'Testimonial info updated successfully.');
    }

    public function delete($id)
    {
        Testimonial::deleteTestimonial($id);
        notify()->success('Testimonial info deleted successfully.');
        return redirect()->back();
    }
}
