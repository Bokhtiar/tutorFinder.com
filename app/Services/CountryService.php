<?php

namespace App\Services;

use App\Models\Country;

class CountryService
{ 
    /* list of resoruce */
    public static function findAll()
    {
        return Country::latest()->get(['country_id', 'country_name']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'country_name' => $request->country_name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Country::create(CountryService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Country::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $country = CountryService::findById($id);
        return $country->update(CountryService::fildResource($request));
    }
}
