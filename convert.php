<?php

$loader = require_once __DIR__.'/vendor/autoload.php';

use Conversion\Console\Application\ConvertApplication;
use Conversion\Console\Command\ConvertCommand;

$application = new ConvertApplication();
$application->add(new ConvertCommand());
$application->run();