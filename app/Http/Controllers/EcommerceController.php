<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use App\Models\HeroSlider;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Testimonial;
use App\Models\Subscriber;
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
            'products'           => Product::all(),
            'recentProducts'     => Product::orderBy('id', 'desc')->take(5)->get(),
        ]);
    }

    public function product(){
        return view('website.product.index',[
            'categories'  =>    Category::all(),
            'products'    =>    Product::all(),
        ]);
    }


    public function detail($id){
        $product        = Product::find($id);
        $category       = Category::find($product->category_id);

        return view('website.product.detail',[
            'categories'            => Category::all(),
            'product'               => $product,
            'category'              => $category,
            'relatedProducts'       => Product::where('category_id', $category->id)
                                        ->where('id', '!=', $id)
                                        ->take(3)
                                        ->get(),
        ]);
    }
    public function history(){
        return view('website.order.order-history',[
            'categories'    => Category::all(),
            'orders'        => Order::all(),
            'orderDetails'  => OrderDetail::all(),
        ]);
    }

    public function search(Request $request)
    {
        $categories         = Category::all();
        $query              = $request->input('query');
        $products           = Product::query();

        if (empty($query)) {
            return redirect()->back()->with('error', ['message' => 'Please enter a search query.']);
        }
        else  {
            $products->where('name', 'like', '%'.$query.'%')
                  ->orWhere('short_description', 'like', '%'.$query.'%')
                  ->orWhere('long_description', 'like', '%'.$query.'%')
                  ->orWhere('slug', 'like', '%'.$query.'%');
        }

        $products           = $products->get();

        return view('website.search.index', compact('products','categories'));
    }


    public function subscribeNewsletter(Request $request)
    {
       $request->validate([
        'email'        => ['required', 'email', 'max:255', 'unique:subscribers,email']
       ],[
        'email.required' => 'The Email field is required',
        'email.unique' => 'Email is already subscribed!',
       ]);

        $subscriber         = new Subscriber();
        $subscriber->email  = $request->email;
        $subscriber->save();

       return redirect()->back()->with('success','Subscribed to Newsletter successfully.');
    }

   
   
}
