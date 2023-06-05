<?php

namespace App\Http\Controllers;

use App\Http\Requests\TutorEducationRequest;
use App\Models\TutorEducation;
use App\Services\TutorEducationService;
use Illuminate\Http\Request;

class TutorEducationController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $tutorEducations = TutorEducationService::findAll();
            return view('tutor.education.index', compact('tutorEducations'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {}

    /* Store a newly created resource in storage. */
    public function store(TutorEducationRequest $request)
    {
        try {
            TutorEducationService::storeResource($request);
            return redirect()->route('tutor-education.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TutorEducation $tutorEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TutorEducation $tutorEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TutorEducation $tutorEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TutorEducation $tutorEducation)
    {
        //
    }
}
