<?php

return [
    'contact_email' => env('CONTACT_EMAIL', 'hello@nexusqart.com'),
    'nexa_register_url' => env('NEXA_REGISTER_URL', 'https://getwooperly.com/register'),
    'nexa_login_url' => env('NEXA_LOGIN_URL', env('WOOPERLY_URL', 'https://getwooperly.com/login')),
];
