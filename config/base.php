<?php
return [
    'name'  => 'Swoft framework 2.0',
    'debug' => env('SWOFT_DEBUG', 1),
    'SERVICE_ID' => env('SERVICE_ID', 'api'),
    'SERVICE_NAME' => env('SERVICE_NAME', 'api'),
    'SERVICE_ADDRESS' => env('SERVICE_ADDRESS', '172.20.0.16'),
    'CONSUL_ADDRESS' => env('CONSUL_ADDRESS', '172.20.1.1'),
    'CONSUL_PORT' => env('CONSUL_PORT', '8500'),
    'USER_SERVICE_CLIENT' => env('USER_SERVICE_CLIENT', '172.20.0.15'),
];
