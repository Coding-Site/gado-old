<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    //this social media data

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'GITHUB_REDIRECT_URI',
    ],
    'facebook' => [
        'client_id' => '625547486370704',
        'client_secret' => 'e8c830c664cd7de54444ca3e8e93879f',
        'redirect' => 'https://gadoeg.com/login/facebook/callback',
    ],
    
    'google' => [
        'client_id' => '530160633403-f44qomdgmsujrcpghfl7f9hv556dp4g7.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://gadoeg.com/login/google/callback',
    ],

];
