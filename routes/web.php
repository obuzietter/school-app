<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FirebaseController;
Route::get('/', [CourseController::class, 'fetchCourses']);


Route::view('/about', 'about');
// Route::view('/admissions', 'admissions');
Route::get('/admissions', [CourseController::class, 'fetchCourses']);
Route::view('/community', 'community');
Route::view('/application-form', 'enroll.application-form')->name('application-form');

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
// Route::post('/applications', function(){
//     dd('Your application has been submitted successfully!');
// })->name('applications.store');

//mail route
// Route::get('/send-application-mail', function () {
//     $name = 'Evanilson';
//     Mail::to('whiteshadow3980@gmail.com')->send(new ApplicationMail($name)); 
// });
Route::post('/send-application-mail', [ApplicationController::class, 'sendApplicationMail']);


Route::get('/mpesa-messages', [FirebaseController::class, 'showMpesaMessages']);

Route::get('/messages', [FirebaseController::class, 'showMpesaMessages'])->name('messages.index');
Route::post('/messages/store', [FirebaseController::class, 'storeMessages'])->name('messages.store');
Route::post('/messages/delete', [FirebaseController::class, 'deleteMessages'])->name('messages.delete');
