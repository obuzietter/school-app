<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Mail\ApplicationMail;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\Log;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the form data
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|string|in:male,female,other',
                'email' => 'required|email|unique:applications,email',
                'phone' => 'required|string|max:20',
                'education' => 'required|string',
                'course' => 'required|string',
                'preferred_intake' => 'required|string',
                'referral' => 'required|string',
                'additional_info' => 'nullable|string',
                'confirmation_message' => 'required|string|max:255',
            ]);

            // Save the data into the database
            $application = Application::create($validated);

            if (!$application) {
                Log::error('Application save failed', ['data' => $validated]);
                return redirect('/application-form')->with('errors', 'Failed to submit your application. Please try again.');
            }

            // Send the email
            try {
                Mail::to('ombebavictor22@gmail.com')->send(new ApplicationMail($validated));
            } catch (Exception $e) {
                Log::error('Email sending failed', ['error' => $e->getMessage()]);
                return redirect('/application-form')->with('errors', 'Application saved, but email notification failed. Please contact support.');
            }

            return redirect('/application-form')->with('success', 'Your application has been submitted successfully! We will contact you soon.');

        } catch (Exception $e) {
            // Log unexpected errors
            Log::error('Unexpected error in application store', ['error' => $e->getMessage()]);
            return redirect('/application-form')->with('errors', 'An unexpected error occurred. Please fill all the fields and try again!.');
        }
    }
}
