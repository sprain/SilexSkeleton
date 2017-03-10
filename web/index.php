<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/skeleton/bootstrap.php';


// A first route
$app->get('/', 'Sprain\\Silex\\Controller\\DefaultController::default');

$app->run();
