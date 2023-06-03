<?php

namespace App\Services;

use App\Models\City;

class CountryService
{
    /* list of resoruce */
    public static function findAll()
    {
        return City::latest()->get(['city_id', 'city_name', 'state_id']);
    }

    // /* fild resoruce */
    // public static function fildResource($request)
    // {
    //     return array(
    //         'country_name' => $request->country_name,
    //     );
    // }

    // /* store new resoruce */
    // public static function storeResource($request)
    // {
    //     return Country::create(CountryService::fildResource($request));
    // }

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
