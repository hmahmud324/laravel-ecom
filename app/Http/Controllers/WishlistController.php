<?php

namespace App\Http\Controllers;


use Cart;
use Session;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index(){
        return view('website.wishlist.index',[
            'categories'    => Category::all(),
            'wishlistItem' => Wishlist::all()
        ]);
    }

    public function addToWishlist(Request $request)
    {
        if (!Session::has('customer_id')) {
            return redirect()->back()->with('error', 'Invalid customer.');
        }

        $customerId = Session::get('customer_id');
        $productId = $request->input('product_id');

        $existingWishlistItem = Wishlist::where('customer_id', $customerId)
        ->where('product_id', $productId)
        ->first();

    if ($existingWishlistItem) {
        // Product already exists in the wishlist
        return redirect()->back()->with('error', 'Product already exists in the wishlist.');
    }

    // Create a new wishlist item
    $wishlistItem = new Wishlist();
    $wishlistItem->customer_id = $customerId;
    $wishlistItem->product_id = $productId;
    $wishlistItem->save();

    return redirect()->route('wishlist.index')->with('success', 'Product added to the wishlist.');

    }

    public function removeFromWishlist(Request $request)
    {
        if (!Session::has('customer_id')) {
            return redirect()->back()->with('error', 'Invalid customer.');
        }

        $customerId = Session::get('customer_id');
        $productId = $request->input('product_id');
        // Find the wishlist item to be removed
        $wishlistItem = Wishlist::where('customer_id', $customerId)
        ->where('product_id', $productId)
        ->first();

        if (!$wishlistItem) {
        // Wishlist item not found
        return redirect()->back()->with('error', 'Product not found in the wishlist.');
        }

        // Delete the wishlist item
        $wishlistItem->delete();

        return redirect()->back()->with('success', 'Product removed from the wishlist.');
        }


        public function addToCart(Request $request)
        {
            if (!Session::has('customer_id')) {
                return redirect()->back()->with('error', 'Invalid customer.');
            }

            $product     = Cart::content();
            $productId   = Session::get('customer_id');
            $customerId  = $request->input('customer_id');

            // Perform validation and other necessary checks
            Cart::add([
                'id'        => $productId,
                'name'      => $product->name,
                'qty'       => $request->qty,
                'price'     => $product->selling_price,
                'options'   => [
                    'image'     => $product->image,
                    'category'  => $product->category->name,
                    'brand'     => $product->brand->name,
                ]]);
            return redirect('/my-shopping-cart');
           
        }
}
