<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Services\CountryService;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $countries = CountryService::findAll();
            return view('modules.country.index', compact('countries'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        //
    }

    /* Store a newly created resource in storage. */
    public function store(CountryRequest $request)
    {
        try {
            CountryService::storeResource($request);
            return redirect()->route('country.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource */
    public function show(Country $country)
    {
        //
    }

    /* Show the form for editing the specified resource */
    public function edit($id)
    {
        try {
            $edit = CountryService::findById($id);
            $countries = CountryService::findAll();
            return view('modules.country.index', compact('edit', 'countries'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage */
    public function update(CountryService $request, $id)
    {
        try {
            CountryService::findByIdAndUpdate($id, $request);
            return redirect()->route('country.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            CountryService::findById($id)->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
