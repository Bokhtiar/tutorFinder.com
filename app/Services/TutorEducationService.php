<?php

namespace App\Services;

use App\Models\Tutor;
use App\Models\TutorEducation;
use Illuminate\Support\Facades\Auth;

class TutorEducationService
{
    /* list of resoruce */
    public static function findAll()
    {
        return TutorEducation::latest()->get();
    }

    /* tutor education list */
    public static function findTutorEducation($id)
    { 
        return TutorEducation::where('tutor_id', $id)->get();
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        $user_id = Auth::user()->id;
        $tutor = Tutor::where('user_id', $user_id)->first();
        return array(
            'tutor_id' => $tutor->tutor_id,
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
        $tutorEducation = TutorEducationService::findById($id);
        return $tutorEducation->update(TutorEducationService::fildResource($request));
    }

    /* specifuc tutor education list */
    public static function findAllSpecificTutorEducation($id)
    {
        return TutorEducation::where('tutor_id', $id)->get();
    }
}
