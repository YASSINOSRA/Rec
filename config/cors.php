<?php

return [

    /*
    |----------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |----------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Ensure Sanctum's CSRF cookie path is allowed

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],  // Allow OPTIONS method for preflight requests

    'allowed_origins' => [
        'https://rec-production-2edb.up.railway.app',  // Add other domains if needed
        'http://your-local-domain.com',  // If testing locally, add this for localhost support
    ],

    'allowed_origins_patterns' => [],  // Use this if you need pattern-based matching for origins

    'allowed_headers' => [
        'Content-Type',
        'Authorization',
        'X-Requested-With',
        'X-CSRF-TOKEN',  // Ensure CSRF token header is allowed
    ],

    'exposed_headers' => [],  // Expose any headers to the browser if necessary

    'max_age' => 0,  // Cache duration for preflight requests in seconds, adjust as needed

    'supports_credentials' => true,  // Allow cookies and credentials in requests

];
