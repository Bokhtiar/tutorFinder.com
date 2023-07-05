<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use App\Services\CityService;
use App\Services\TutorService;
use App\Services\StateService;
use App\Services\SubjectService;
use App\Services\CountryService;
use App\Services\TutorEducationService;
use App\Services\VillageService;

use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    /* booking */
    public function payment($id)
    { 
        $tutor = TutorService::findById($id);
        return view('modules.payment.create', compact('tutor'));
    }
    /* list of display tutors */
    public function index()
    {
        try {
            $items = TutorService::findAll();
            return response()->json([
                'message' => "Tutor list",
                'data' => $items
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    /* tutor singup page */
    public function singup()
    {
        try {
            return view('tutor.auth.singup');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* tutor profile page */
    public function profile()
    {
        try {
            $edit = Tutor::where('user_id', Auth::user()->id)->first();
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


    /* tutor profile update */
    public function store(Request $request)
    {
        try {
            TutorService::storeResource($request);
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* update */
    public function update(Request $request, $id)
    {
        try {
            TutorService::findByIdAndUpdate($id, $request);
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* dislay of tutor profile */
    public function show($id)
    {
        try {
            $show = TutorService::findById($id);
            $educations = TutorEducationService::findAllSpecificTutorEducation($id);
            return view('tutor.auth.profile', compact('show','educations'));
        } catch (\Throwable $th) {
            throw $th;
        }
    } 
}
