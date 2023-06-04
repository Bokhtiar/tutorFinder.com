<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
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
    {
    }

    /* Store a newly created resource in storage. */
    public function store(ServiceRequest $request)
    {
        try {
            ServicesService::storeResource($request);
            return redirect()->route('services.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(Services $services)
    {
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $edit = ServicesService::findById($id);
            $services = ServicesService::findAll();
            return view('modules.services.index', compact('edit', 'services'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            ServicesService::findByIdAndUpdate($id, $request);
            return redirect()->route('services.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            ServicesService::findById($id)->delete();
            return redirect()->route('services.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
