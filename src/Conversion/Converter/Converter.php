<?php

namespace Conversion\Converter;

use Conversion\Unit\UnitFactory;

class Converter
{

    public function convert($value, $fromUnit, $toUnit)
    {
        $unitFrom = UnitFactory::getUnit($fromUnit);
        $unitTo   = UnitFactory::getUnit($toUnit);

        // TODO: validate unitfrom and unitto belong to same category (weight, temp...)

        $base = $unitFrom->toBase($value);
        $converted = $unitTo->fromBase($base);

        return $converted;
    }

} 