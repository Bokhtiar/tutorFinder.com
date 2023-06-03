<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;

/* Web Routes */

Route::get('/', function () {
    return view('welcome');
});

/* web auth route */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


/* web auth module route */

/* country */
Route::resource('country', CountryController::class);
/* state */
Route::resource('state', StateController::class);
/* city */
// Route::resource('')