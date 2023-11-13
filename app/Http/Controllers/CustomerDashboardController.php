<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use Session;
use Illuminate\Http\Request;



class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('customer.home',[
            'categories' => Category::all(),
        ]);
        // [
        //     'orders' => Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->take(3)->get(),
        // ]);
    }

    public function profile()
    {
        return view('customer.profile');
    }

    public function order()
    {
        return view('customer.order');
    }

    public function changePassword()
    {
        return view('customer.change-password');
    }
    public function orderDetail()
    {
        return view('customer.order-detail');
    }



}
