<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use App\Services\SubjectService;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /* Display a listing of the resource. */
    public function index()
    {
        try {
            $subjects = SubjectService::findAll();
            return view('modules.subject.index', compact('subjects'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Show the form for creating a new resource. */
    public function create()
    {
    }

    /* Store a newly created resource in storage. */
    public function store(SubjectRequest $request)
    {
        try {
            SubjectService::storeResource($request);
            return redirect()->route('subject.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Display the specified resource. */
    public function show(Subject $subject)
    {
    }

    /* Show the form for editing the specified resource. */
    public function edit($id)
    {
        try {
            $subjects = SubjectService::findAll();
            $edit = SubjectService::findById($id);
            return view('modules.subject.index', compact('edit', 'subjects'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(SubjectRequest $request, $id)
    {
        try {
            SubjectService::findByIdAndUpdate($id, $request);
            return redirect()->route('subject.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Remove the specified resource from storage. */
    public function destroy($id)
    {
        try {
            SubjectService::findById($id)->delete();
            return redirect()->route('subject.index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
