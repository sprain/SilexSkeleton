<?php

// Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../../src/Resources/Views',
    'twig.options'    => array(
    'cache' => $app['config']['devMode'] ? false : $app['config']['cacheDir'],
)));

// Cache
$app['cache'] = function($app) {
    return new \Doctrine\Common\Cache\FilesystemCache($app['config']['cacheDir']);
};

// Doctrine
$app['em'] = function($app) {
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/../../src/Entity'), $app['config']['devMode'], null, $app['cache']);
    return \Doctrine\ORM\EntityManager::create($app['config']['db'], $config);
};