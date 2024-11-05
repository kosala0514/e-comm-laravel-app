<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the access control allowing all origins, methods,
    | and headers. You may also specify specific origins or methods.
    |
    */

    'paths' => ['api/*', 'product/*', '*'], // Add the paths you want to allow
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], // Your React app's URL
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'supports_credentials' => true,

];