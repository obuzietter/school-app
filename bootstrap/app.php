<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->validateCsrfTokens(except: [
            'payment-callback',  // ✅ Exclude payment webhook
            'stk-push',             // ✅ Exclude all API routes
            'check-payment-status',         // ✅ Exclude all webhooks
            
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
