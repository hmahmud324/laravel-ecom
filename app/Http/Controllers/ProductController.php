<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\OtherImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.manage',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories         = Category::all();
        $brands             = Brand::all();
        return view('admin.product.index', compact('categories', 'brands'));
    }


    /**
     * Store a newly created resource in storage.
     */
    private $product;
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImage::newOtherImages($request->other_image,$this->product->id);
        return back()->with('message', 'Product info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories         = Category::all();
        $brands             = Brand::all();
        return view('admin.product.edit', compact('product','categories','brands',));
    }

    private $message;
    public function updateStatus($id)
    {
        $this->message = Product::updateFeaturedStatus($id);
        return back()->with('message', $this->message);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request,$product->id);
        if ($request->other_image) {
            OtherImage::updateOtherImage($request,$product->id);
        }
        return redirect('/product')->with('message', 'Product info updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        OtherImage::deleteOtherImage($product->id);
        return redirect('/product')->with('message', 'Product info deleted successfully.');
    }
}
