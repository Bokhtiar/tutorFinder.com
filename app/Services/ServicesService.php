<?php

namespace App\Services;

use App\Models\Services;
use App\Traits\ImageUpload;


class ServicesService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Services::latest()->get(['service_id', 'title', 'body', 'image']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {

        $path = 'image/service/';
        return array(
            'title' => $request->title,
            'body' => $request->body,
            'image' => ImageUpload::Image($request, $path),
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Services::create(ServicesService::fildResource($request));
    }

    // /* specific resoruce */
    // public static function findById($id)
    // {
    //     return Country::find($id);
    // }

    // /* specific resource update */
    // public static function findByIdAndUpdate($id, $request)
    // {
    //     $country = CountryService::findById($id);
    //     return $country->update(CountryService::fildResource($request));
    // }
}
