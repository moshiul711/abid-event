<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photographer extends Model
{
    use HasFactory;
    public static $photographer, $description, $image, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image         = $request->file('image');
        self::$imageName     = self::$image->getClientOriginalName();
        self::$directory     = 'upload/photographer-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newphotographer($request)
    {
        self::$imageUrl = self::getImageUrl($request);

        self::$photographer = new photographer();
        return self::saveBasicInfo(self::$photographer,$request,self::$imageUrl);

    }

    public static function updatephotographer($id, $request)
    {
        self::$photographer = photographer::find($id);

        if ($request->hasFile('image'))
        {
            if (file_exists(self::$photographer->image))
            {
                unlink(self::$photographer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$photographer->image;
        }
        return self::saveBasicInfo(self::$photographer,$request,self::$imageUrl);
    }

    public static function deletephotographer($id)
    {
        self::$photographer = photographer::find($id);
        if(file_exists(self::$photographer->image))
        {
            unlink(self::$photographer->image);
        }
        self::$photographer->delete();
    }
    public static function saveBasicInfo($photographer,$request,$imageUrl)
    {
        $photographer->name          = $request->name;
        $photographer->email         = $request->email;
        $photographer->mobile          = $request->mobile;
        $photographer->description   = $request->description;
        $photographer->s_price   = $request->charge;
        $photographer->image         = $imageUrl;
        $photographer->save();
        return $photographer;
    }
    public function photographerOtherImages()
    {
        return $this->hasMany(PhotographerOtherImage::class);
    }
}

