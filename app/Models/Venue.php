<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    public static $venue, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/venue-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newvenue($request)
    {
        self::$imageUrl = self::getImageUrl($request);

        self::$venue = new venue();
        return self::saveBasicInfo(self::$venue,$request,self::$imageUrl);

    }

    public static function updatevenue($id, $request)
    {
        self::$venue = venue::find($id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$venue->image))
            {
                unlink(self::$venue->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$venue->image;
        }
        return self::saveBasicInfo(self::$venue,$request,self::$imageUrl);
    }

    public static function deletevenue($id)
    {
        self::$venue = venue::find($id);
        if(file_exists(self::$venue->image))
        {
            unlink(self::$venue->image);
        }
        self::$venue->delete();
    }
    public static function saveBasicInfo($venue,$request,$imageUrl)
    {
        $venue->name          = $request->name;
        $venue->address   = $request->address;
        $venue->description   = $request->description;
        $venue->s_price   = $request->charge;
        $venue->image         = $imageUrl;
        $venue->save();
        return $venue;
    }
    public function venueOtherImages()
    {
        return $this->hasMany(VenueOtherImage::class);
    }
}
