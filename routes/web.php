<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ServicesController;


/* Web Routes */
Route::get('/', function () {
    return view('welcome');
});

/* web auth route */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


/* web auth module route */

/* location */
Route::resource('city', CityController::class);
Route::resource('state', StateController::class);
Route::resource('country', CountryController::class);
Route::resource('village', VillageController::class);

/* subject */
Route::resource('subject', SubjectController::class);

/* services */
Route::resource('services', ServicesController::class);

/* tutor */
Route::get('/tutor/singup', [App\Http\Controllers\TutorController::class, 'singup'])->name('tutor.singup');
