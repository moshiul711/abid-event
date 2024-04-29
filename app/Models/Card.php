<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    public static $card, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/card-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newcard($request)
    {
        self::$imageUrl = self::getImageUrl($request);

        self::$card = new card();
        return self::saveBasicInfo(self::$card,$request,self::$imageUrl);

    }

    public static function updatecard($id, $request)
    {
        self::$card = card::find($id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$card->image))
            {
                unlink(self::$card->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$card->image;
        }
        return self::saveBasicInfo(self::$card,$request,self::$imageUrl);
    }

    public static function deletecard($id)
    {
        self::$card = card::find($id);
        if(file_exists(self::$card->image))
        {
            unlink(self::$card->image);
        }
        self::$card->delete();
    }
    public static function saveBasicInfo($card,$request,$imageUrl)
    {
        $card->name          = $request->name;
        $card->description   = $request->description;
        $card->s_price   = $request->s_price;
        $card->r_price   = $request->r_price;
        $card->quantity   = $request->quantity;
        $card->image         = $imageUrl;
        $card->save();
        return $card;
    }
    public function cardOtherImages()
    {
        return $this->hasMany(CardOtherImage::class);
    }
}
