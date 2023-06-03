<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use App\Services\StateService;
use App\Services\CountryService;
use App\Http\Requests\StateRequest;

class StateController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $states = StateService::findAll();
            $countries = CountryService::findAll();
            return view('modules.state.index', compact('states', 'countries'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {}

    /* Store a newly created resource in storage */
    public function store(Request $request)
    {
        
        try {
            StateService::storeResource($request);
            return redirect()->route('state.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(State $state)
    {}

    /* Show the form for editing the specified resource */
    public function edit($id)
    {
        try {
            $states = StateService::findAll();
            $edit = StateService::findById($id);
            $countries = CountryService::findAll();
            return view('modules.state.index', compact('states', 'edit', 'countries'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update($id, Request $request)
    {
        try {
            StateService::findByIdAndUpdate($request, $id);
            return redirect()->route('state.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        //
    }
}
