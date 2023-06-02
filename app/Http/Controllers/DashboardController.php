<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* listing of the information */
    public function index()
    {
        try {
            return view('dashobard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
