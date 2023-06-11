<?php

namespace App\Services;

use App\Models\Testimonial;
use App\Traits\ImageUpload;


class TestimonialService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Testimonial::latest()->get();
    }

    /* fild resoruce */
    public static function fildResource($request, $image = null)
    {

        if ($request->hasFile('image')) {
            $path = 'image/testimonial/';
            $uploadImage =  ImageUpload::Image($request, $path);
        } else {
            $uploadImage = $image;
        }

        return array(
            'image' => $uploadImage,
            'name' => $request->name,
            'body' => $request->body,
            'designation' => $request->designation,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Testimonial::create(TestimonialService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Testimonial::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $testmonial = TestimonialService::findById($id);
        $image = $testmonial->image;
        return $testmonial->update(TestimonialService::fildResource($request, $image));
    }

    /* testimonial slider */
    public static function slider()
    {
       return Testimonial::inRandomOrder()->take(1)->first();
    }
}
