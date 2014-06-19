<?php

namespace Conversion\Converter;

use Conversion\Unit\UnitFactory;

class Converter
{

    public function convert($value, $fromUnit, $toUnit)
    {
        $unitFrom = UnitFactory::getUnit($fromUnit);
        $unitTo   = UnitFactory::getUnit($toUnit);

        $converted = $value * $unitFrom->toBase() * $unitTo->fromBase();

        return $converted;
    }

} 