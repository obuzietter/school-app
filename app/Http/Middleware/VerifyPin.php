<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VerifyPin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    
    
     public function handle(Request $request, Closure $next)
    {
        // Define the hardcoded PIN
        $hardcodedPin = '1234';

        // Compare the entered PIN with the hardcoded PIN
        if ($request->input('pin') !== $hardcodedPin) {
            // Redirect to the PIN prompt page if the PIN doesn't match
            return redirect('/enter-pin')->with('error', 'Invalid PIN. Please try again.');
        }

        // Proceed with the request if the PIN matches
        return $next($request);
    }
     
    
}
