<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
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

    
}
