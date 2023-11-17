<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    private static $testimonial,$image,$imageName,$imageUrl,$directory;

    public static function imageUpload($request)
    {
        self::$image       = $request->file('image');
        self::$imageName   = self::$image->getClientOriginalName();
        self::$directory   = 'uploads/testimonial-images/';
        self::$image->move(self::$directory ,self::$imageName);
        return self::$directory.self::$imageName; 
    }

    public static function newTestimonial($request)
    {
        self::$imageUrl = self::imageUpload($request);

        self::$testimonial = new Testimonial();
        self::$testimonial->text             = $request->text;
        self::$testimonial->author_name      = $request->author_name;
        self::$testimonial->author_role      = $request->author_role;
        self::$testimonial->image            = self::$imageUrl;
        self::$testimonial->save();
    }

    public static function updateTestimonial($request,$id)
    {
        self::$testimonial = Testimonial::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$testimonial->image)) {
                unlink(self::$testimonial->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else
        {
            self::$imageUrl = self::$testimonial->image;
        }
        self::$testimonial->text             = $request->text;
        self::$testimonial->author_name      = $request->author_name;
        self::$testimonial->author_role      = $request->author_role;
        self::$testimonial->image            = self::$imageUrl;
        self::$testimonial->save();
    }

    public static function deleteTestimonial($id)
    {
        self::$testimonial = Testimonial::find($id);
        if (file_exists(self::$testimonial->image)) 
        {
                unlink(self::$testimonial->image);
         }
        self::$testimonial->delete();
    }

}
