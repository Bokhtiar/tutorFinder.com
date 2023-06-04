<?php

namespace App\Services;

use App\Models\Services;
use App\Models\Tutor;
use App\Traits\ImageUpload;


class TutorService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Tutor::latest()->get();
    }

    /* fild resoruce */
    public static function fildResource($request, $image = null)
    {
        if ($request->hasFile('image')) {
            $path = 'image/service/';
            $uploadImage =  ImageUpload::Image($request, $path);
        } else {
            $uploadImage = $image;
        }

        return array(
            'title' => $request->title,
            'body' => $request->body,
            'image' => $uploadImage,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        dd($request->all());
        return Services::create(ServicesService::fildResource($request));
    }

    // /* specific resoruce */
    // public static function findById($id)
    // {
    //     return Services::find($id);
    // }

    // /* specific resource update */
    // public static function findByIdAndUpdate($id, $request)
    // {
    //     $service = ServicesService::findById($id);
    //     $image = $service->image;
    //     return $service->update(ServicesService::fildResource($request, $image));
    // }
}
