<?php

namespace App\Services;

use App\Models\Tutor;
use App\Traits\ImageUpload;
use Illuminate\Support\Facades\Auth;

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
            $path = 'image/tutor/';
            $uploadImage =  ImageUpload::Image($request, $path);
        } else {
            $uploadImage = $image;
        }

        return array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_id' => Auth::user()->id,
            'subject_id' => $request->subject_id,
            'tutor_hour' => $request->tutor_hour,
            'weekly_day' => $request->weekly_day,
            'fee' => $request->fee,
            'fb' => $request->fb,
            'insta' => $request->insta,
            'linkdin' => $request->linkdin,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'village_id' => $request->village_id,
            'address' => $request->address,
            'bio' => $request->bio,
            'image' => $uploadImage,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Tutor::create(TutorService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Tutor::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $tutor = TutorService::findById($id);
        $image = $tutor->image;
        return $tutor->update(TutorService::fildResource($request, $image));
    }
}
