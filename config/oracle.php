<?php

return [
    'oracle' => [
        'driver'        => 'oracle',
        'tns'           => env('ODB_TNS', ''),
        'host'          => env('ODB_HOST', ''),
        'port'          => env('ODB_PORT', '1521'),
        'database'      => env('ODB_DATABASE', ''),
        'username'      => env('ODB_USERNAME', ''),
        'password'      => env('ODB_PASSWORD', ''),
        'charset'       => env('ODB_CHARSET', 'AL32UTF8'),
        'prefix'        => env('ODB_PREFIX', ''),
        'prefix_schema' => env('ODB_SCHEMA_PREFIX', ''),
        // 'options'       => [
        //                         PDO::ATTR_PERSISTENT => true
        //                     ],
    ],
];
