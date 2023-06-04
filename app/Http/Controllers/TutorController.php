<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Services\CityService;
use App\Services\CountryService;
use App\Services\StateService;
use App\Services\SubjectService;
use App\Services\TutorService;
use App\Services\VillageService;
use Illuminate\Http\Request;

class TutorController extends Controller
{
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
            $subjects = SubjectService::findAll();
            $countries = CountryService::findAll();
            $states = StateService::findAll();
            $cities = CityService::findAll();
            $villages = VillageService::findAll();
            return view('auth.profile', compact('subjects', 'countries', 'states', 'cities', 'villages'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /* tutor profile update */
    public function store(Request $request)
    {
        TutorService::storeResource($request);
    }

    
}
