<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Course;
use App\Mail\ApplicationMail;
use App\Models\Marketer;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\Log;

class ApplicationController extends Controller
{
    public function getCourses(Request $request)
    {
        // Fetch all enabled courses from the database
        $courses = Course::where('is_enabled', 1)->get();

        // Check if a referral code is present in the URL
        $referralCode = $request->input('referral_code');

        // Pass data (courses and referral code) to the view
        return view('enroll.application-form', compact('courses', 'referralCode'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the form data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|string',
                'email' => 'required|email|unique:applications,email',
                'phone' => 'required|string|max:20',
                'education' => 'required|string',
                'course' => 'required|string',
                'preferred_intake' => 'required|string',
                'referral_code' => 'nullable|string|exists:marketers,referral_code', // Validate referral code
                'additional_info' => 'nullable|string',
                'confirmation_message' => 'required|string|max:10|min:10',
            ]);

            // Save the data into the database
            $application = Application::create($validated);

            if (!$application) {
                Log::error('Application save failed', ['data' => $validated]);
                return redirect('/application-form')
                    ->withInput() // ++ Return with input data
                    ->with('errors', 'Failed to submit your application. Please try again.');
            }

            // If referral code is valid, increment the marketer's students referred
            if ($validated['referral_code']) {
                Marketer::where('referral_code', $validated['referral_code'])->increment('students_referred');
            }

            // Send the email
            // try {
            //     Mail::to('obuyacalvince672@gmail.com')->send(new ApplicationMail($validated));
            // } catch (Exception $e) {
            //     Log::error('Email sending failed', ['error' => $e->getMessage()]);
            //     return redirect('/application-form')
            //         ->withInput()// ++ Return with input data
            //         ->with('errors', 'Application saved, but email notification failed. Please contact support.');
            // }

            try {
                Mail::to('obuyacalvince672@gmail.com')
                    ->cc('ombebavictor22@gmail.com') // Add another recipient as CC
                    ->bcc('info@palmateacademy.co.ke') // Add another recipient as BCC (hidden from others)
                    ->send(new ApplicationMail($validated));
            } catch (Exception $e) {
                Log::error('Email sending failed', ['error' => $e->getMessage()]);
                return redirect('/application-form')
                    ->withInput() // ++ Return with input data
                    ->with('errors', 'Application saved, but email notification failed. Please contact support.');
            }
            

            return redirect('/application-form')->with('success', 'Your application has been submitted successfully! We will contact you soon.');
        } catch (Exception $e) {
            // Log unexpected errors
            Log::error('Unexpected error in application store', ['error' => $e->getMessage()]);
            return redirect('/application-form')
                ->withInput() // ++ Return with all input data
                ->with('errors', $e->getMessage());
        }
    }
}
