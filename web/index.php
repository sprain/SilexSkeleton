<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../app/skeleton/bootstrap.php';


// A first route
$app->get('/', 'Sprain\\Silex\\Controller\\DefaultController::default');

$app->run();
