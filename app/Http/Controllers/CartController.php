<?php

namespace App\Http\Controllers;


use Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class CartController extends Controller
{
    private $product,$cartProducts;
    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);

        $this->cartProducts = Cart::content();
        if(count($this->cartProducts) > 0)
        {
            foreach ($this->cartProducts as $cartProduct) {
                if ($cartProduct->id == $id)
                {
                    $totalItem = $cartProduct->qty + $request->qty;
                    if ($this->product->stock_amount < $totalItem )
                    {
                        if (($this->product->stock_amount - $cartProduct->qty) == 0)
                        {
                            return back()->with('success', 'Sorry...you have purchased maximum amount');
                        }
                        return back()->with('success', sprintf('Sorry... you can purchase maximum %d amount', ($this->product->stock_amount - $cartProduct->qty)));

                    }
                }
            }

        }

        if ($this->product->stock_amount < $request->qty)
        {
            return back()->with('success', sprintf('Sorry... you can purchase maximum %s amount', $this->product->stock_amount));
        }
        Cart::add([
            'id'        => $id,
            'name'      => $this->product->name,
            'qty'       => $request->qty,
            'price'     => $this->product->selling_price,
            'options'   => [
                'image'     => $this->product->image,
                'category'  => $this->product->category->name,
                'brand'     => $this->product->brand->name,
            ]]);
        return redirect('/my-shopping-cart')->with('success','Product added to cart successfully.');
    }

    public function show()
    {
        return view('website.cart.index',[
            'cart_products'=> Cart::content(),
            'categories' => Category::all(),
    ]);
    }
    public function update(Request $request,$id)
    {
        $this->product = Product::find($request->id);
        if ($this->product->stock_amount < $request->qty)
        {
            return back()->with('success', sprintf('Sorry... you can purchase maximum %s amount', $this->product->stock_amount));
        }
        Cart::update($id, $request->qty);
        return back()->with('success', 'Cart product info updated successfully.');
    }

    public function delete($id)
    {
        Cart::remove($id);
        return back()->with('success', 'Cart product info removed successfully.');
    }

}


