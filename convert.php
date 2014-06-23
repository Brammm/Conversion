<?php

$loader = require_once __DIR__.'/vendor/autoload.php';

use Conversion\Console\Application\ConvertApplication;

$application = new ConvertApplication();
$application->run();