<?php

/**
 * The bootstrap file creates and returns the container.
 */

namespace MyApp\Config;

include_once __DIR__ . '/../vendor/autoload.php';


$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/config.php');
$container = $builder->build();
// $cv[] = $container->get('dbName');
// $cv[] = $container->get('dbUser');
// $cv[] = $container->get('dbPassword');
// $cv[] = $container->get('dbHost');
// $cv[] = $container->get('dbTable');
// $cv[] = $container->get('dbType');

return $container;
