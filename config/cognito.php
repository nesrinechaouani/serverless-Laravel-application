<?php

return [
    /*
    |--------------------------------------------------------------------------
    | AWS Cognito Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for AWS Cognito.
    |
    */

    'user_pool_id' => env('COGNITO_USER_POOL_ID'),
    'client_id' => env('COGNITO_CLIENT_ID'),
    'client_secret' => env('COGNITO_CLIENT_SECRET'),
    'region' => env('COGNITO_REGION', 'eu-north-1'),
    'version' => env('COGNITO_VERSION', 'latest'),
];