<?php
return [
    'base_uri' => env('HARVEST_API_URL', 'https://api.harvestapp.com/v2/'),

    'access_token' => env('HARVEST_ACCESS_TOKEN'),
    'account_id'   => env('HARVEST_ACCOUNT_ID'),
    'user_agent'   => env('HARVEST_USER_AGENT'),
];
