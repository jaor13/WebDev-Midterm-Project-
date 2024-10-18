<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $logMessage = sprintf(
            "[%s] %s %s %s\n",
            now()->toDateTimeString(),  // Timestamp
            $request->method(),         // HTTP method
            $request->fullUrl(),        // Full URL
            $request->ip()              // IP address
        );

        File::append(storage_path('logs/request_log.txt'), $logMessage);

        return $next($request);
    }
    public function terminate(Request $request, $response)
    {
        // Prepare the log message for the response
        $logMessage = sprintf(
            "[%s] Response Status: %s %s\n",
            now()->toDateTimeString(),  // Timestamp
            $response->status(),        // Response status
            $request->fullUrl()         // Full URL
        );

        // Append to log.txt file in the storage/logs directory
        File::append(storage_path('logs/request_log.txt'), $logMessage);
    }
}
