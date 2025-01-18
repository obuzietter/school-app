<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CourseController;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\InquiryController;
use App\Http\Middleware\VerifyPin;

use Illuminate\Support\Facades\Log;

Route::get('/', [CourseController::class, 'fetchCourses']);


Route::view('/about', 'about')->name('about');
// Route::view('/admissions', 'admissions');
Route::get('/admissions', [CourseController::class, 'fetchCoursesAd']);
Route::view('/community', 'community');
Route::get('/application-form', [ApplicationController::class, 'getCourses'])->name('application-form');

Route::post('/applications', [ApplicationController::class, 'store'])->name('applications.store');
Route::get('/courses/{id}', [CourseController::class, 'showCourse'])->name('courses.show');

Route::post('/send-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');


Route::post('/send-application-mail', [ApplicationController::class, 'sendApplicationMail']);


Route::get('/mpesa-messages', [FirebaseController::class, 'showMpesaMessages'])->name('all.messages')->middleware(VerifyPin::class);

Route::get('/messages', [FirebaseController::class, 'showMpesaMessages'])->name('messages.index');
Route::post('/messages/store', [FirebaseController::class, 'storeMessages'])->name('messages.store');
Route::post('/messages/delete', [FirebaseController::class, 'deleteMessages'])->name('messages.delete');

Route::get('/enter-pin', function () {
    return view('mpesa.pin-prompt');
})->name('enter-pin');


Route::get('/storage/{path}', function ($path) {
    $filePath = storage_path('app/public/' . $path);

    if (!file_exists($filePath)) {
        abort(404);
    }

    return response()->file($filePath);
})->where('path', '.*')->name('storage.file');





