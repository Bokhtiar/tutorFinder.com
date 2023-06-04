<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Services\SubjectService;
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
            return view('auth.profile', compact('subjects'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    
}
