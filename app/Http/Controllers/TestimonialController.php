<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Services\TestimonialService;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $testimonials = TestimonialService::findAll();
            return view('modules.testimonial.index', compact('testimonials'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
        try {
            return view('modules.testimonial.createUpdate');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Store a newly created resource in storage. */
    public function store(TestimonialRequest $request)
    {
        try {
            TestimonialService::storeResource($request);
            return redirect()->route('testimonial.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(Testimonial $testimonial)
    {
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $edit = TestimonialService::findById($id);
            return view('modules.testimonial.createUpdate', compact('edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(TestimonialRequest $request, $id)
    {
        try {
            TestimonialService::findByIdAndUpdate($id, $request);
            return redirect()->route('testimonial.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            TestimonialService::findById($id)->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
