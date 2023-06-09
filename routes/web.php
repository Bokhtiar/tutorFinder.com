<?php

use App\Models\Tutor;
use App\Services\SubjectService;
use App\Services\ServicesService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TutorEducationController;


/* Web Routes */

Route::get('/', function () {
    $services = ServicesService::findAll();
    $top_tutors = Tutor::inRandomOrder()->limit(10)->get();
    $subjects = SubjectService::findAll();
    $tutors = Tutor::inRandomOrder()->limit(20)->get();
    return view('welcome', compact('services', 'top_tutors', 'subjects', 'tutors'));
});

Route::get('/contact/index', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


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
Route::get('/subject-ways-tutor/{id}', [SubjectController::class, 'subject_ways_tutor']);
 

/* services */
Route::resource('services', ServicesController::class);

/* testimonial */
Route::resource('testimonial', TestimonialController::class);
Route::get('testimonial-slider', [TestimonialController::class, 'testimonial_slider']);

/* tutor education */
Route::resource('tutor-education', TutorEducationController::class);

/* tutor */
Route::get('/tutor', [App\Http\Controllers\TutorController::class, 'index']);
Route::get('/tutor/show/{id}', [App\Http\Controllers\TutorController::class, 'show'])->name('tutor.show');
Route::get('/tutor/payment/create/{id}', [App\Http\Controllers\TutorController::class, 'payment']);
Route::get('/tutor/payment/index', [App\Http\Controllers\PaymentController::class, 'index'])->name('tutor.payment.index');
Route::post('/tutor/payment/{id}', [App\Http\Controllers\PaymentController::class, 'store'])->name('tutor.payment')->middleware('auth');
Route::get('/tutor/singup', [App\Http\Controllers\TutorController::class, 'singup'])->name('tutor.singup');
Route::post('/tutor/store', [App\Http\Controllers\TutorController::class, 'store'])->name('tutor.store');
Route::put('tutor/profile/update/{id}', [App\Http\Controllers\TutorController::class, 'update'])->name('tutor.profile.update');
Route::get('tutor/profile', [App\Http\Controllers\TutorController::class, 'profile'])->name('tutor.profile');

/* student */
Route::get('/student/singup', [App\Http\Controllers\StudentController::class, 'singup'])->name('student.singup');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('student/profile', [App\Http\Controllers\StudentController::class, 'profile'])->name('student.profile');
Route::put('student/profile/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.profile.update');

 
/* role & permission */
Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
