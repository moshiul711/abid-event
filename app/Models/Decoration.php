<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{

    use HasFactory;
    public static $decoration, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/decoration-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newdecoration($request)
    {
        self::$imageUrl = self::getImageUrl($request);

        self::$decoration = new decoration();
        return self::saveBasicInfo(self::$decoration,$request,self::$imageUrl);

    }

    public static function updatedecoration($id, $request)
    {
        self::$decoration = decoration::find($id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$decoration->image))
            {
                unlink(self::$decoration->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$decoration->image;
        }
        return self::saveBasicInfo(self::$decoration,$request,self::$imageUrl);
    }

    public static function deletedecoration($id)
    {
        self::$decoration = decoration::find($id);
        if(file_exists(self::$decoration->image))
        {
            unlink(self::$decoration->image);
        }
        self::$decoration->delete();
    }
    public static function saveBasicInfo($decoration,$request,$imageUrl)
    {
        $decoration->name          = $request->name;
        $decoration->description   = $request->description;
        $decoration->s_price   = $request->s_price;
        $decoration->r_price   = $request->r_price;
        $decoration->image         = $imageUrl;
        $decoration->save();
        return $decoration;
    }
    public function decorationOtherImages()
    {
        return $this->hasMany(OtherImage::class);
    }
}
