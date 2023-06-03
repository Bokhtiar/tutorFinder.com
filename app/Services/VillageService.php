<?php

namespace App\Services;

use App\Models\Village;

class VillageService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Village::latest()->get(['village_id', 'city_id', 'village_name']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'city_id' => $request->city_id,
            'village_name' => $request->village_name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Village::create(VillageService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Village::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $village = VillageService::findById($id);
        return $village->update(VillageService::fildResource($request));
    }
}
