<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use IntaSend\IntaSendPHP\Collection;
use Exception;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Log;

use function Illuminate\Log\log;

class IntasendController extends Controller
{
    protected $collection;

    public function __construct()
    {
        // Load credentials and initialize IntaSend Collection

        $this->collection = new Collection();
        $this->collection->init([
            'publishable_key' => 'ISPubKey_live_ce28acb5-1801-4028-bb0b-4ae4de01288e',
            'token' => 'ISSecretKey_live_dfc8b7c5-b54c-433d-bb0b-792d9bd1ce06',
        ]);
    }

    public function initiateStkPush(Request $request)
    {

        $request->validate([
            'mpesa_number' => 'required|string',
            'amount' => 'required|numeric|min:1',
        ]);


        $phone_number = $request->input('mpesa_number');
        $amount = $request->input('amount');


        try {
            $response = $this->collection->mpesa_stk_push($amount, $phone_number);
            Log::info('STK Push Response: ' . json_encode($response));

            $invoice = $response->invoice;
            $invoice_id = $invoice->invoice_id;

            // Save transaction details in the database
            Payment::create([
                'id' => $response->id,
                'invoice_id' => $invoice_id,
                'state' => 'PROCESSING',
                'provider' => $invoice->provider ?? 'M-PESA',
                'charges' => $invoice->charges ?? 0,
                'net_amount' => $invoice->net_amount,
                'currency' => $invoice->currency ?? 'KES',
                'value' => $invoice->value,
                'account' => $invoice->account,
                'api_ref' => $invoice->api_ref,
                'mpesa_reference' => $invoice->mpesa_reference,
                'failed_reason' => $invoice->failed_reason,
                'failed_code' => $invoice->failed_code,
                'customer_id' => $response->customer->customer_id,
                'phone_number' => $response->customer->phone_number,
            ]);

            return response()->json([
                'status' => 'PENDING',
                'message' => 'Payment request sent. Waiting for user action...',
                'invoice_id' => $invoice_id
            ]);
        } catch (Exception $e) {
            Log::error('STK Push Error: ' . $e->getMessage());
            return response()->json([
                'status' => 'ERROR',
                'message' => $e->getMessage()
            ]);
        }
    }
    public function checkPaymentStatus(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|string'
        ]);

        $invoice_id = $request->input('invoice_id');

        try {
            // $statusResponse = $this->collection->status($invoice_id);
            // $invoice = $statusResponse->invoice;
            $invoice = Payment::where('invoice_id', $invoice_id)->first();
            $status = $invoice->state;
            Log::info('DB Payment Status: ' . $status);
            

            return response()->json([
                'status' => $status,
                'message' => $this->getStatusMessage($status),
                'mpesa_reference' => $invoice->mpesa_reference,
                'failed_reason' => $invoice->failed_reason,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'ERROR',
                'message' => $e->getMessage()
            ]);
        }
    }

    private function getStatusMessage($status)
    {
        switch ($status) {
            case 'COMPLETE':
                return 'Payment was successful';
            case 'FAILED':
                return 'Payment failed';
            case 'CANCELED':
                return 'Payment was canceled';
            case 'PARTIAL':
                return 'Payment was partially successful';
            case 'RETRY':
                return 'Payment was not successful. Please retry';
            case 'PENDING':
                return 'Payment request sent. Waiting for user action...';
            case 'PROCESSING':
                return 'Processing payment...';

            default:
                return 'Unknown status';
        }
    }

    public function paymentCallback(Request $request)
    {
        // Log incoming request
        Log::channel('intasend')->info('Payment Callback Received 📥');

        // Get the raw JSON payload
        $payload = $request->getContent();
        $data = json_decode($payload, true);

        // Validate JSON payload
        if (!$data || !isset($data['invoice_id'])) {
            Log::error('Invalid Payment Callback Payload:', ['payload' => $payload]);
            return response()->json(['error' => 'Invalid request'], 400);
        }

        switch ($data['state']) {
            case 'PENDING':
                Log::channel('intasend')->info('⌛ Payment is pending:', ['invoice_id' => $data['invoice_id'], 'net_amount' => $data['value']]);
                break;
            case 'PROCESSING':
                Log::channel('intasend')->info('🔷 Payment is processing:', ['invoice_id' => $data['invoice_id'], 'net_amount' => $data['value']]);
                break;
            case 'COMPLETE':
                Log::channel('intasend')->info('✅ Payment is complete:', ['invoice_id' => $data['invoice_id'], 'net_amount' => $data['value']]);
                break;
            case 'FAILED':
                Log::channel('intasend')->warning('❌ Payment failed:', ['invoice_id' => $data['invoice_id'], 'failed_reason' => $data['failed_reason']]);
                break;
            case 'CANCELED':
                Log::channel('intasend')->warning('❌ Payment was canceled:', ['invoice_id' => $data['invoice_id']]);
                break;

            default:
                Log::channel('intasend')->warning('⚠️ Unknown payment state:', ['invoice_id' => $data['invoice_id'], 'state' => $data['state']]);
                break;
        }

        // Find the payment record in the database
        $payment = Payment::where('invoice_id', $data['invoice_id'])->first();

        if ($payment) {

            if ($data['state'] == 'COMPLETE' || $data['state'] == 'FAILED') {
                // Update payment details
                $payment->update([
                    'state' => $data['state'] ?? null,
                    'failed_reason' => $data['failed_reason'] ?? null,
                    'failed_code' => $data['failed_code'] ?? null,
                    'mpesa_reference' => $data['mpesa_reference'] ?? null
                ]);
                Log::channel('intasend')->info('Payment updated successfully:', ['invoice_id' => $data['invoice_id'], 'state' => $data['state'], 'net_amount' => $data['value']]);
            }


            
        } else {
            Log::channel('intasend')->warning('Payment record not found for invoice:', ['invoice_id' => $data['invoice_id']]);
        }

        // Respond to IntaSend
        return response()->json(['message' => 'Payment callback processed successfully'], 200);
    }
}
