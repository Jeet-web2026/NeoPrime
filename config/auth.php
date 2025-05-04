<?php

use App\Models\AdminVerify;

return [

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admin_verifies',
        ],
    ],


    'providers' => [
        'admin_verifies' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', AdminVerify::class),
        ],
    ],


    'passwords' => [
        'admin_verifies' => [
            'provider' => 'admin_verifies',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
