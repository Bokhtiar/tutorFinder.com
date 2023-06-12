<?php

namespace App\Services;

use App\Models\Role;

class RoleService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Role::latest()->get(['id', 'name']);
    }

    /* fild resoruce */
    public static function fildResource($request)
    {
        return array(
            'name' => $request->name,
        );
    }

    /* store new resoruce */
    public static function storeResource($request)
    {
        return Role::create(RoleService::fildResource($request));
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Role::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $role = RoleService::findById($id);
        return $role->update(RoleService::fildResource($request));
    }
}
