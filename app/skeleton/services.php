<?php

// Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../../src/Resources/Views',
    'twig.options'    => array(
    'cache' => $app['devMode'] ? false : $app['cacheDir'],
)));

// Cache
$app['cache'] = function($app) {
    return new \Doctrine\Common\Cache\FilesystemCache($app['cacheDir']);
};

// Doctrine
$app['em'] = function($app) {
    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/../../src/Entity'), $app['devMode'], null, $app['cache']);
    return \Doctrine\ORM\EntityManager::create($app['dbParams'], $config);
};