<?php

$env = parse_ini_file('.env');

return [
  'database' => [
    'host' => $env['HOST'],
    'port' => $env['PORT'],
    'dbname' => $env['DB_NAME'],
    'charset' => $env['CHARSET']
  ],
  'user' => [
    'username' => $env['USERNAME'],
    'password' => $env['PASSWORD']
  ]
];

/*
-------for further reference---------
'database' => [
    'host' => "localhost",
    'port' => 3306,
    'dbname' => "practice",
    'charset' => "utf8mb4"
  ],
*/