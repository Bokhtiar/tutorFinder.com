<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use App\Services\CityService;
use App\Services\StateService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $cities = CityService::findAll();
            $states = StateService::findAll();
            return view('modules.city.index', compact('cities', 'states'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource */
    public function create()
    {}

    /* Store a newly created resource in storage */
    public function store(CityRequest $request)
    {
        try {
            CityService::storeResource($request);
            return redirect()->route('city.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
