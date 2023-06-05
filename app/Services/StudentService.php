<?php

namespace App\Services;

use App\Models\Student;
use App\Traits\ImageUpload;
use Illuminate\Support\Facades\Auth;

class StudentService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Student::latest()->get();
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
            'institut_name' => $request->institut_name,
            'class' => $request->class,
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
        return Student::create(StudentService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Student::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $student = StudentService::findById($id);
        $image = $student->image;
        return $student->update(StudentService::fildResource($request, $image));
    }
}
