<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Brand extends Model
{
    use HasFactory;
    private static $brand;

    public static function newBrand($request)
    {
        self::$brand = new brand();
        self::$brand->name               = $request->name;
        self::$brand->slug               = Str::slug($request->name);
        self::$brand->save();
    }

    public static function updateBrand($request,$id)
    {
        self::$brand = brand::find($id);
        self::$brand->name               = $request->name;
        self::$brand->slug               = Str::slug($request->name);
        self::$brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand = brand::find($id);
        self::$brand->delete();
    }

}
