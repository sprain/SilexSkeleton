<?php

// Initialize app
$app = new Silex\Application();

// Load configs and services
require_once __DIR__.'/../config.php';

// Set debug mode
$app['debug'] = $app['devMode'];

// Load base services
require_once __DIR__.'/services.php';

// Load app specific services
require_once __DIR__.'/../../src/Resources/services.php';
