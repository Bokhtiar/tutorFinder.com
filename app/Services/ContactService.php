<?php

namespace App\Services;

use App\Models\Contact;

class ContactService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Contact::latest()->get();
    }

    /* fild resoruce */
    public static function fildResource($request)
    {

        return array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Contact::create(ContactService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Contact::find($id);
    }
}
