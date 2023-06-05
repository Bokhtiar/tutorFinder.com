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

    /* Display the specified resource. */
    public function show(TutorEducation $tutorEducation)
    {}

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $edit = TutorEducationService::findById($id);
            $tutorEducations = TutorEducationService::findAll();
            return view('tutor.education.index', compact('tutorEducations', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(TutorEducationRequest $request, $id)
    {
        try {
            TutorEducationService::findByIdAndUpdate($id, $request);
            return redirect()->route('tutor-education.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            TutorEducationService::findById($id)->delete();
            return redirect()->route('tutor-education.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
