<?php
namespace App\Traits;
use Illuminate\Support\Str;

trait ImageUpload {

    public static function Image($request, $path){
        $image = $request->file('image');
            if ($image) {
                $image_name = Str::random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = $path;
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
            }
        return $image_url;
    }
}