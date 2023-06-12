<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /* listing of the information */
    public function index()
    {
        try {
            $show = User::where('id', Auth::id())->first();
            return view('dashobard', compact('show'));
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
