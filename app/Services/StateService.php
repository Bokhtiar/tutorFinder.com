<?php

namespace App\Services;

use App\Models\State;

class StateService
{
    /* list of resoruce */
    public static function findAll()
    {
        return State::latest()->get(['state_id', 'country_id', 'state_name']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'country_id' => $request->country_id,
            'state_name' => $request->state_name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return State::create(StateService::fildResource($request));
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
