<?php

if (file_exists(__DIR__ . '/config_local.php')) {
    require_once('config_local.php');
}

$config['cacheDir'] =  __DIR__.'/cache/data/';
$config['tempDir']  =  __DIR__.'/temp';