<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/app/skeleton/bootstrap.php';

return ConsoleRunner::createHelperSet($app['em']);