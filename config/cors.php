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

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'], // Specify the allowed methods

    'allowed_origins' => [
        'https://rec-production-2edb.up.railway.app', 
    
    ],

    'allowed_origins_patterns' => [], // You can use patterns to allow specific domains

    'allowed_headers' => [
        'Content-Type', 
        'Authorization', 
        'X-Requested-With', // Add the headers you need for your application
    ],

    'exposed_headers' => [], // Expose additional headers if required

    'max_age' => 0, // Cache duration for preflight request results in seconds

    'supports_credentials' => true, // Enable this if you need cookies/authentication headers

];
