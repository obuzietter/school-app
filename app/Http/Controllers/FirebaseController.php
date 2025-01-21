<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use App\Models\MpesaMessage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class FirebaseController extends Controller
{
    protected $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    /**
     * Display M-Pesa messages from Firebase and the database.
     */
    public function showMpesaMessages()
    {
        // Fetch data from Firebase
        $firebaseData = $this->fetchFirebaseMessages();

        // Check for errors or empty data
        $error = isset($firebaseData['error']) ? $firebaseData['error'] : null;

        // Fetch messages from the database
        $dbMessages = $this->fetchDatabaseMessages();

        // Render the view
        return $this->renderView($firebaseData, $dbMessages, $error);
    }

    /**
     * Store Firebase messages in the database.
     */
    public function storeMessages()
    {
        $firebaseData = $this->fetchFirebaseMessages();

        if (isset($firebaseData['error'])) {
            return back()->with('error', 'Failed to fetch messages from Firebase: ' . $firebaseData['error']);
        }

        // Get errors from storing messages in the database
        $errors = $this->storeMessagesInDatabase($firebaseData);

        // Check if there are any errors
        if (count($errors) > 0) {
            return back()->with('error', implode('<br>', $errors)); // Display multiple errors as a string
        }

        return back()->with('success', 'Messages stored in the database successfully!');
    }

    /**
     * Delete Firebase messages.
     */
    public function deleteMessages()
    {
        $firebaseData = $this->fetchFirebaseMessages();

        if (isset($firebaseData['error'])) {
            return back()->with('error', 'Failed to fetch messages from Firebase: ' . $firebaseData['error']);
        }

        $deleteError = $this->deleteFirebaseMessages(array_keys($firebaseData));

        if ($deleteError) {
            return back()->with('error', $deleteError);
        }

        return back()->with('success', 'Messages deleted from Firebase successfully!');
    }

    private function fetchFirebaseMessages(): array
    {
        return $this->firebaseService->getData('mpesaMessages') ?? [];
    }

    // private function storeMessagesInDatabase(array $firebaseData): void
    // {
    //     foreach ($firebaseData as $message) {
    //         MpesaMessage::updateOrCreate(
    //             ['body' => $message['body']], // Use 'body' to prevent duplicates
    //             [
    //                 'address' => $message['address'],
    //                 'body' => $message['body'],
    //                 'date' => Carbon::createFromTimestampMs($message['date'])->toDateTimeString(),
    //             ]
    //         );
    //     }
    // }

    private function storeMessagesInDatabase(array $firebaseData): array
    {
        // Updated regex pattern to capture transaction code, date, time, amount, and description
        $pattern = '/(\w{10,})\s*Confirmed\.?\s*on\s*(\d{1,2}\/\d{1,2}\/\d{2,4})\s*at\s*(\d{1,2}:\d{2}\s?[APM]{2})\s*Ksh([\d,\.]+)\s*received\s*from\s*([^\.]+)/';
        
        $errors = []; // Store errors here
    
        foreach ($firebaseData as $message) {
            // Attempt to match the message with the regex
            if (preg_match($pattern, $message['body'], $matches)) {
                // Extract the values
                $transactionCode = $matches[1];
                $date = $matches[2];
                $time = $matches[3];
                $amount = str_replace(',', '', $matches[4]); // Remove commas in amount
                $description = $matches[5];
    
                // Check if the transaction code already exists in the database
                $existingMessage = MpesaMessage::where('transaction_code', $transactionCode)->first();
                Log::info("Existing message", ['message' => $existingMessage]);
    
                if (!$existingMessage) {
                    // Store the message in the database
                    MpesaMessage::updateOrCreate(
                        ['body' => $message['body']], // Use 'body' to prevent duplicates
                        [
                            'transaction_code' => $transactionCode,
                            'amount' => (float) $amount, // Store amount as a float
                            'description' => $description, // Store description
                            'date' => Carbon::createFromFormat('d/m/y', $date)->toDateString() . ' ' . $time, // Store date and time
                            'address' => $message['address'],
                        ]
                    );
                } else {
                    $errors[] = "Duplicate transaction code found, skipping message: {$transactionCode}";
                }
            } else {
                // Log the message if it doesn't match the expected format
                Log::warning("Message format doesn't match regex pattern", ['message' => $message['body']]);
                // $errors[] = "Message format doesn't match regex pattern: ". substr($message['body'],0,10);
            }
        }
        
        return $errors;  // Return the captured errors
    }
    


    private function fetchDatabaseMessages()
    {
        return MpesaMessage::orderBy('date', 'desc')->get();
    }

    private function deleteFirebaseMessages(array $keys): ?string
    {
        foreach ($keys as $key) {
            $deleteResponse = $this->firebaseService->deleteData("mpesaMessages/$key");

            if (isset($deleteResponse['error'])) {
                return 'Error deleting some Firebase messages: ' . $deleteResponse['error'];
            }
        }

        return null;
    }

    private function renderView($firebaseData, $dbMessages, $error = null)
    {
        return view('mpesaMessages', [
            'messages' => $firebaseData,
            'db_messages' => $dbMessages,
            'error' => $error,
        ]);
    }

    
}
