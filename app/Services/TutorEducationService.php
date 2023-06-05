<?php

namespace App\Services;

use App\Models\TutorEducation;

class TutorEducationService
{
    /* list of resoruce */
    public static function findAll()
    {
        return TutorEducation::latest()->get();
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'tutor_id' => $request->tutor_id,
            'institute_name' => $request->institute_name,
            'degree_name' => $request->degree_name,
            'result' => $request->result,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return TutorEducation::create(TutorEducationService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return TutorEducation::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $tutorEducation = TutorEducation::findById($id);
        return $tutorEducation->update(TutorEducation::fildResource($request));
    }
}
