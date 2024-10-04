<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Artifact Token
    |--------------------------------------------------------------------------
    |
    | This value is the token of your artifact, which will be used when the
    |
    */

    'token' => env('TOKEN_ARTIFACT', 'token'),


    /*
    |--------------------------------------------------------------------------
    | Headers Artifact
    |--------------------------------------------------------------------------
    |
    | This value is the headers of your artifact, which will be used when the
    |
    */

    'headers' => [
        'Content-Type'=> 'application/json',
        'Accept'=> 'application/json',
        'Authorization'=> 'Bearer ' . env('TOKEN_ARTIFACT', 'token'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Artifact Token
    |--------------------------------------------------------------------------
    |
    | This value is the token of your artifact, which will be used when the
    |
    */

    'server' => env('SERVER_ARTIFACT', 'server'),

];
