<?php

namespace App\Models;


use Session;
use Illuminate\Support\Facades\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customer extends Model
{
    use HasFactory;
    private static $customer, $image, $imageUrl, $imageName, $directory;

    public static function imageUpload($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
        
    }



    public static function newCustomer($request)
    {
    self::$customer = new Customer();
    self::$customer->name          = $request->name;
    self::$customer->email         = $request->email;
    self::$customer->mobile        = $request->mobile;
    if($request->password)
    {
        self::$customer->password = bcrypt($request->password);
    }
    else
    {
        self::$customer->password = bcrypt(Str::random(9));
    }
    self::$customer->save();
    return self::$customer;
    }


    // public static function updateCustomer($request)
    // {
    //     self::$customer                 = Customer::find(Session::get('customer_id'));
    //     self::$customer->name           = $request->name;
    //     self::$customer->email          = $request->email;
    //     self::$customer->mobile         = $request->mobile;
    //     if ($request->filled('password')) {
    //         $request->validate([
    //             'current_password' => 'required',
    //             'password'         => 'required|min:9|confirmed',
    //         ]);
    //         if (Hash::check($request->current_password, self::$customer->password)) {
    //             self::$customer->password = bcrypt($request->password);
    //         } else {
    //             return redirect()->back()->with('message', 'Current password is incorrect.');
    //         }
    //     }
    //     self::$customer->save();
    // }

    public static function updateProfileImage($request)
    {
        self::$customer = Customer::find(Session::get('customer_id'));
        if ($request->file('image'))
        {
            if (file_exists(self::$customer->image))
            {
                unlink(self::$customer->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            if (self::$customer->image)
            {
                self::$imageUrl = self::$customer->image;
            }
            else
            {
                self::$imageUrl = 'download/avater.png';
            }
        }
        self::$customer->image          = self::$imageUrl;
        self::$customer->save();
    }

}