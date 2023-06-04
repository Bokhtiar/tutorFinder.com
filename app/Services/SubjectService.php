<?php

namespace App\Services;

use App\Models\Subject;

class SubjectService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Subject::latest()->get(['subject_id', 'subject_name']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {

        return array(
            'subject_name' => $request->subject_name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Subject::create(SubjectService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Subject::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $Subject = SubjectService::findById($id);
        return $Subject->update(SubjectService::fildResource($request));
    }
}
