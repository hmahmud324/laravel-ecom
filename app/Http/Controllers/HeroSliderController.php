<?php

namespace App\Http\Controllers;


use App\Models\HeroSlider;
use App\Models\Product;
use Illuminate\Http\Request;

class HeroSliderController extends Controller
{
   public function index()
   {
       return view('admin.hero-slider.index',[
        'products' => Product::all(),
       ]);
   }

   public function create(Request $request)
   {
       $this->validate($request, [
           'title'          => 'required|unique:hero_sliders,title',
           'subtitle'       => 'required',
           'discount'       => 'required|numeric|min:0|max:100',
       ], [
          'title.required'              => 'Title field is required.',
          'title.unique'                => 'Title has already been taken.',
          'subtitle.required'           => 'Subtitle field is required.',
          'discount.required'           => 'Discount field is required.',
          'discount.numeric'            => 'Discount must be a number.',
          'discount.min'                => 'Discount must be between 0 and 100.',
          'discount.max'                => 'Discount must be between 0 and 100.',
       ]);

       HeroSlider::newHeroSlider($request);
       return back()->with('success', 'Hero Slider info created successfully.');
   }

   public function manage()
   {
       return view('admin.hero-slider.manage', [
           'hero_sliders' => HeroSlider::all(),
       ]);
   }

   public function edit($id)
   {
       return view('admin.hero-slider.edit', [
           'hero_slider' => HeroSlider::find($id),
           'products'    =>  Product::all(),
       ]);
   }

   public function update(Request $request, $id)
   {
        HeroSlider::updateHeroSlider($request, $id);
        return redirect('/hero-slider/manage/')->with('success', 'Hero Slider info updated successfully.');
   }

   public function delete($id)
   {
       HeroSlider::deleteHeroSlider($id);
       notify()->success('Hero Slider info deleted successfully.');
       return redirect()->back();
   }
}
