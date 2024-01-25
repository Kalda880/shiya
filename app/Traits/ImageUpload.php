<?php

namespace App\Traits;

use Illuminate\Support\Str; 

trait ImageUpload
{
    public function uploadImage($image)
    {

        $image_name = Str::random(20);

        $ext = strtolower($image->getClientOriginalExtension());

        $image_full_name = $image_name.'.'.$ext;

        $upload_path = 'storage/images/';

        $image_url = asset($upload_path.$image_full_name);

        $image->move($upload_path,$image_full_name);

        return $image_full_name;
    }


    public function GallryUpload($gallery)
    {

        $images = [];


        foreach($gallery as $index => $file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = uniqid() .  'ideco.' . $fileName;

            $upload_path = 'images/';

            $image_url = asset($upload_path.$fileName);

            $file->move($upload_path,$fileName);

            $images[] = $image_url;
        }


        return  implode(",", $images);

    }


    public function updalodFile($file){

        $image_name = Str::random(20);

        $ext = strtolower($file->getClientOriginalExtension());

        $image_full_name = $image_name.'.'.$ext;

        $upload_path = 'files/';

        $file->move($upload_path,$image_full_name);

        return $image_full_name;
    }


}
