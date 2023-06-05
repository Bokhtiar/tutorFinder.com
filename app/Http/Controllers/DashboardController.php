<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /* logouts */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
