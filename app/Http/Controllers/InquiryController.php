<?php
namespace App\Http\Controllers;

use App\Models\Inquiry;  // Add the Inquiry model
use App\Mail\InquiryMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Save the inquiry data to the database
            $inquiry = Inquiry::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
            ]);

            // Check if saving was successful
            if (!$inquiry) {
                throw new Exception('Failed to save the inquiry to the database.');
            }

            // Send the email notification
            try {
                Mail::to('obuyacalvince672@gmail.com')->send(new InquiryMail($validated));
            } catch (Exception $e) {
                Log::error('Email sending failed', ['error' => $e->getMessage()]);
                return redirect()->back()->with('error', 'Application saved, but email notification failed. Please contact support.');
            }

            return redirect()->back()->with('success', 'Your inquiry has been submitted successfully!');

        } catch (Exception $e) {
            // Log any errors during the database operation
            Log::error('Database insertion failed', ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'There was an error saving your inquiry. Please try again later.');
        }
    }
}
