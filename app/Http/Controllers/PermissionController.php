<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Services\PermissionService;
use App\Services\RoleService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $permissions = PermissionService::findAll();
            return view('modules.permission.index', compact('permissions'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {
        try {
            $roles = Role::all();
            return view('modules.permission.createOrUpdate', compact('roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        try {
            PermissionService::storeResource($request);
            return redirect()->route('permission.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(Permission $permission)
    {}

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $permission = PermissionService::findById($id);
            $roles = RoleService::findAll();
            return view('modules.permission.edit', compact('permission', 'roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            PermissionService::findByIdAndUpdate($id, $request);
            return redirect()->route('permission.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
