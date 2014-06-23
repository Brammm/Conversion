<?php

require_once __DIR__.'/vendor/autoload.php';

use Conversion\Console\Application\ConvertApplication;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('resources/services.yml');

$application = new ConvertApplication($container);
$application->run();