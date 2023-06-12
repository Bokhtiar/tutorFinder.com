<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $roles = RoleService::findAll();
            return view('modules.role.index', compact('roles'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {}

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        try {
            RoleService::storeResource($request);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show($id)
    {}

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $roles = RoleService::findAll();
            $edit = RoleService::findById($id);
            return view('modules.role.index', compact('roles', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            RoleService::findByIdAndUpdate($id, $request);
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            RoleService::findById($id)->delete();
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
