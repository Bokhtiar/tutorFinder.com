<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TutorEducationController;
use App\Models\Tutor;
use App\Services\ServicesService;
use App\Services\TutorService;

/* Web Routes */

Route::get('/', function () {
    $services = ServicesService::findAll();
    $top_tutors = Tutor::inRandomOrder()->limit(10)->get();
    return view('welcome', compact('services', 'top_tutors'));
});

/* web auth route */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/logouts', [App\Http\Controllers\DashboardController::class, 'logout'])->name('logouts');


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

/* tutor education */
Route::resource('tutor-education', TutorEducationController::class);

/* tutor */
Route::get('/tutor/singup', [App\Http\Controllers\TutorController::class, 'singup'])->name('tutor.singup');
Route::post('/tutor/store', [App\Http\Controllers\TutorController::class, 'store'])->name('tutor.store');
Route::put('tutor/profile/update/{id}', [App\Http\Controllers\TutorController::class, 'update'])->name('tutor.profile.update');
Route::get('tutor/profile', [App\Http\Controllers\TutorController::class, 'profile'])->name('tutor.profile');

/* student */
Route::get('/student/singup', [App\Http\Controllers\StudentController::class, 'singup'])->name('student.singup');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('student/profile', [App\Http\Controllers\StudentController::class, 'profile'])->name('student.profile');
Route::put('student/profile/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.profile.update');
