<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
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

    
    // 'google' => [
    //     'client_id' => env('930885140800-rve34269vr7nsqua75nuqa45ghhpes2l.apps.googleusercontent.com'),
    //     'client_secret' => env('WqzttkZL1eOUQ6rJ3QKh-R0B'),
    //     'redirect' => env('https://localhost/callback/google'),
    // ],

    // 'facebook' => [
    //     'client_id' => env('137737831649699'),
    //     'client_secret' => env('01363ef425bcc0765bc0cfe2ff32d5ba'),
    //     'redirect' => env('http:/localhost/callback/facebook'),
    // ]

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_CLIENT_CALLBACK')
    ],

    'facebook' => [
        'client_id'     => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect'      => env('FACEBOOK_REDIRECT_URI'),
    ]


];
