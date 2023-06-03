<?php

namespace App\Services;

use App\Models\City;

class CityService
{
    /* list of resoruce */
    public static function findAll()
    {
        return City::latest()->get(['city_id', 'city_name', 'state_id']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'state_id' => $request->state_id,
            'city_name' => $request->city_name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return City::create(CityService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return City::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $city = CityService::findById($id);
        return $city->update(CityService::fildResource($request));
    }
}
