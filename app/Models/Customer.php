<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $customer, $image, $imageUrl, $imageName, $directory;

    // public static function imageUpload($request)
    // {
    //     self::$image = $request->file('image');
    //     self::$imageName = self::$image->getClientOriginalName();
    //     self::$directory = 'uploads/customer-images/';
    //     self::$image->move(self::$directory, self::$imageName);
    //     return self::$directory.self::$imageName;
        
    // }



    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name           = $request->name;
        self::$customer->email          = $request->email;
        self::$customer->mobile         = $request->mobile;
        if($request->password)
        {
            self::$customer->password = bcrypt($request->password);
        }
        else
        {
            self::$customer->password = bcrypt($request->mobile);
        }
        self::$customer->save();
        return self::$customer;
    }

    // public static function updateCustomer($request)
    // {
    //     self::$customer = Customer::find(Session::get('customer_id'));
    //     if ($request->file('image'))
    //     {
    //         if (file_exists(self::$customer->image))
    //         {
    //             unlink(self::$customer->image);
    //         }
    //         self::$imageUrl = self::getImageUrl($request);
    //     }
    //     else
    //     {
    //         if (self::$customer->image)
    //         {
    //             self::$imageUrl = self::$customer->image;
    //         }
    //         else
    //         {
    //             self::$imageUrl = 'download/avater.png';
    //         }
    //     }
    //     self::$customer->name           = $request->name;
    //     self::$customer->email          = $request->email;
    //     self::$customer->mobile         = $request->mobile;
    //     self::$customer->nid            = $request->nid;
    //     self::$customer->image          = self::$imageUrl;
    //     self::$customer->address        = $request->address;
    //     self::$customer->date_of_birth  = $request->date_of_birth;
    //     self::$customer->blood_group    = $request->blood_group;
    //     self::$customer->save();
    // }
}
