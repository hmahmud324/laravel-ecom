<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroSlider extends Model
{
   use HasFactory;
   private static $heroSlider,$image,$imageUrl,$directory,$imageName;

   public static function imageUpload($request)
   {
       self::$image        = $request->file('image');
       self::$imageName    = self::$image->getClientOriginalName();
       self::$directory    = 'uploads/hero-slider-images/';
       self::$image->move(self::$directory, self::$imageName);
       return self::$directory . self::$imageName;
   }

   public static function newHeroSlider($request)
   {
       self::$imageUrl = self::imageUpload($request);

       self::$heroSlider = new HeroSlider();
       self::$heroSlider->product_id         = $request->product_id;
       self::$heroSlider->title              = $request->title;
       self::$heroSlider->subtitle           = $request->subtitle;
       self::$heroSlider->image              = self::$imageUrl;
       self::$heroSlider->discount           = $request->discount;
       self::$heroSlider->save();
   }

   public static function updateHeroSlider($request,$id)
   {
       self::$heroSlider = HeroSlider::find($id);
       if ($request->file('image'))
       {
           if (file_exists(self::$heroSlider->image)) {
               unlink(self::$heroSlider->image);
           }
           self::$imageUrl = self::imageUpload($request);
       }
       else
       {
           self::$imageUrl = self::$heroSlider->image;
       }
       self::$heroSlider->product_id         = $request->product_id;
       self::$heroSlider->title              = $request->title;
       self::$heroSlider->subtitle           = $request->subtitle;
       self::$heroSlider->image              = self::$imageUrl;
       self::$heroSlider->discount           = $request->discount;
       self::$heroSlider->save();
   }

   public static function deleteHeroSlider($id)
   {
       self::$heroSlider = HeroSlider::find($id);
       if (file_exists(self::$heroSlider->image))
       {
           unlink(self::$heroSlider->image);
       }
       self::$heroSlider->delete();
   }


   public function product()
   {
       return $this->belongsTo(Product::class);
   }
}
