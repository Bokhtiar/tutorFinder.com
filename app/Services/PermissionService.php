<?php

namespace App\Services;

use App\Models\Permission;

class PermissionService
{
    /* list of resoruce */
    public static function findAll()
    {
        return Permission::latest()->get();
    }


    /* store new resoruce */
    public static function storeResource($request)
    {
        return Permission::create($request->all());
    }

    /* specific resoruce */
    public static function findById($id)
    {
        return Permission::find($id);
    }

    /* specific resource update */
    public static function findByIdAndUpdate($id, $request)
    {
        $permission = PermissionService::findById($id);
        return $permission->update($request->all());
    }
}
