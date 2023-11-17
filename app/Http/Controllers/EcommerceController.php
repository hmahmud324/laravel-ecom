<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HeroSlider;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;



class EcommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index',[
            'featured_products'  => Product::where('featured_status',1)->get(),
            'hero_sliders'       => HeroSlider::where('featured_status',1)->get(),
            'testimonials'       => Testimonial::where('status',1)->get(),
            'categories'         => Category::all(),
        ]);
    }

    public function product(){
        return view('website.product.index',[
            'categories'  =>Category::all(),
            'products'    => Product::all(),
        ]);
    }


    public function detail($id){
        return view('website.product.detail',[
            'categories'  => Category::all(),
            'product'     => Product::find($id),
        ]);
    }
}
