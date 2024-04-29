<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public static $food, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/food-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newfood($request)
    {
        self::$imageUrl = self::getImageUrl($request);

        self::$food = new food();
        return self::saveBasicInfo(self::$food,$request,self::$imageUrl);

    }

    public static function updatefood($id, $request)
    {
        self::$food = food::find($id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$food->image))
            {
                unlink(self::$food->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$food->image;
        }
        return self::saveBasicInfo(self::$food,$request,self::$imageUrl);
    }

    public static function deletefood($id)
    {
        self::$food = food::find($id);
        if(file_exists(self::$food->image))
        {
            unlink(self::$food->image);
        }
        self::$food->delete();
    }
    public static function saveBasicInfo($food,$request,$imageUrl)
    {
        $food->name          = $request->name;
        $food->description   = $request->description;
        $food->s_price   = $request->s_price;
        $food->r_price   = $request->r_price;
        $food->quantity   = $request->quantity;
        $food->image         = $imageUrl;
        $food->save();
        return $food;
    }
    public function foodOtherImages()
    {
        return $this->hasMany(FoodOtherImage::class);
    }
}
