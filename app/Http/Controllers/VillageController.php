<?php

namespace App\Http\Controllers;

use App\Http\Requests\VillageRequest;
use App\Models\Village;
use App\Services\CityService;
use App\Services\VillageService;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $cities = CityService::findAll();
            $villages = VillageService::findAll();
            return view('modules.village.index', compact('villages', 'cities'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {}

    /* Store a newly created resource in storage. */
    public function store(VillageRequest $request)
    {
        try {
            VillageService::storeResource($request);
            return redirect()->route('village.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(Village $village)
    {}

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $cities = CityService::findAll();
            $villages = VillageService::findAll();
            $edit = VillageService::findById($id);
            return view('modules.village.index', compact('villages', 'cities', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(VillageRequest $request, $id)
    {
        try {
            VillageService::findByIdAndUpdate($id, $request);
            return redirect()->route('village.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            VillageService::findById($id)->delete();
            return redirect()->route('village.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
