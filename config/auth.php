<?php

use App\Models\AdminVerify;
use App\Models\ClientRegister;

return [

    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admin_verifies',
        ],
        'client' => [
            'driver' => 'session',
            'provider' => 'client_verifies',
        ],
    ],


    'providers' => [
        'admin_verifies' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', AdminVerify::class),
        ],
        'client_verifies' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', ClientRegister::class),
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
