<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Services\ServicesService;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /* Display a listing of the resource */
    public function index()
    {
        try {
            $services = ServicesService::findAll();
            return view('modules.services.index', compact('services'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }
}
