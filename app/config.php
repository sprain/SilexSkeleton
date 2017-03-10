<?php

// Dev mode
$app['devMode'] = true;

// Cache
$app['cacheDir'] = __DIR__.'/cache/data';

// Database
$app['dbParams'] = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'password',
    'dbname'   => 'foo',
);