<?php

$loader = require_once __DIR__.'/vendor/autoload.php';
//
//use Conversion\Converter\Converter;
//
//if (count($argv) !== 4) {
//    echo "Command needs 3 parameters: value, unitFrom, unitTo. Ex: \"php convert.php 1 kg g\"\n";
//    exit(0);
//}
//list($script, $value, $unitFrom, $unitTo) = $argv;
//
//$converter = new Converter();
//$converted = $converter->convert(
//    $value,
//    $unitFrom,
//    $unitTo
//);
//
//echo sprintf("%.2f %s is %.2f %s\n", $value, $unitFrom, $converted, $unitTo);
//

use Conversion\Console\Application\ConvertApplication;
use Conversion\Console\Command\ConvertCommand;

$application = new ConvertApplication();
$application->add(new ConvertCommand());
$application->run();