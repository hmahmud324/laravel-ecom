<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;
    private static $category,$image,$imageUrl,$directory,$imageName;

    public static function imageUpload($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function newCategory($request)
    {
        self::$imageUrl = self::imageUpload($request);

        self::$category = new Category();
        self::$category->name               = $request->name;
        self::$category->slug               = Str::slug($request->name);
        self::$category->image              = self::$imageUrl;
        self::$category->save();
    }

    public static function updateCategory($request,$id)
    {
        self::$category = Category::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name               = $request->name;
        self::$category->slug               = Str::slug($request->name);
        self::$category->image              = self::$imageUrl;
        self::$category->save();
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        if (file_exists(self::$category->image))
        {
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

}
