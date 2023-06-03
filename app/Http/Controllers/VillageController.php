<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Village $village)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Village $village)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        //
    }
}
