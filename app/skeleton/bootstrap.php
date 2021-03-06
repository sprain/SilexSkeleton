<?php

// Initialize app
$app = new Silex\Application();

// Load configs and services
require_once __DIR__.'/../config.php';
$app['config'] = $config;

// Set debug mode
$app['debug'] = $app['config']['devMode'];

// Load base services
require_once __DIR__.'/services.php';

// Load app specific services
require_once __DIR__.'/../../src/Resources/services.php';
