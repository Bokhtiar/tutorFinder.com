<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Services\CityService;
use App\Services\CountryService;
use App\Services\StateService;
use App\Services\StudentService;
use App\Services\SubjectService;
use App\Services\VillageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /* student singup */
    public function singup()
    {
        try { 
            return view('student.auth.singup');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* tutor profile page */
    public function profile()
    {
        try {
            $edit = Student::where('user_id', Auth::user()->id)->first();
            $subjects = SubjectService::findAll();
            $countries = CountryService::findAll();
            $states = StateService::findAll();
            $cities = CityService::findAll();
            $villages = VillageService::findAll();
            return view('auth.profile', compact('subjects', 'countries', 'states', 'cities', 'villages', 'edit'));
        } catch (\Throwable $th) {
            throw $th;
        } 
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        try {
            StudentService::storeResource($request);
            return redirect()->route('student.profile');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, $id)
    {
        try {
            StudentService::findByIdAndUpdate($id, $request);
            return redirect()->route('student.profile');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
