<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;



class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('customer.home',[
            'categories' => Category::all(),
            'customer' => Customer::find(Session::get('customer_id')),
            'orders' => Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function profile()
    {
        return view('customer.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name'                  => 'required',
            'email'                 => 'required',
            'current_password'      => 'required|min:9',
            'password'              => 'required|min:9|confirmed',
        ]);
    
        $customer = Customer::find(Session::get('customer_id'));
    
        $customer->name    = $request->name;
        $customer->email   = $request->email;
        $customer->mobile  = $request->mobile;
        
        if (Hash::check($request->current_password, $customer->password)) {
            if ($request->filled('password')) {
                $customer->password = bcrypt($request->password);
            }
    
            $customer->save();
    
            return back()->with('success', 'Profile info updated successfully.');
        } else {
            return back()->with('error', 'Current password is incorrect.');
        }
    }
    public function updateImage(Request $request)
    {
        Customer::updateProfileImage($request);
        return back()->with('success', 'Profile Photo updated successfully.');
    }
    public function order()
    {
        return view('customer.order');
    }

    public function orderDetail()
    {
        return view('customer.order-detail');
    }



}
