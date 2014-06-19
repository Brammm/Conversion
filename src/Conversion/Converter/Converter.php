<?php

namespace Conversion\Converter;

use Conversion\Unit\UnitFactory;
use Conversion\Unit\UnitInterface;

class Converter
{

    /**
     * Converts a value from one unit to another
     *
     * @param $value
     * @param $fromUnit
     * @param $toUnit
     *
     * @return float
     */
    public function convert($value, $fromUnit, $toUnit)
    {
        $unitFrom = UnitFactory::getUnit($fromUnit);
        $unitTo   = UnitFactory::getUnit($toUnit);

        $this->protectInvalidConversion($unitFrom, $unitTo);

        $base      = $unitFrom->toBase($value);
        $converted = $unitTo->fromBase($base);

        return $converted;
    }

    /**
     * Checks if the conversion is valid
     *
     * @param UnitInterface $unitFrom
     * @param UnitInterface $unitTo
     */
    public function protectInvalidConversion(UnitInterface $unitFrom, UnitInterface $unitTo)
    {

        $categoryFrom = explode('\\', get_class($unitFrom))[2];
        $categoryTo   = explode('\\', get_class($unitTo))[2];

        if ($categoryFrom !== $categoryTo) {
            throw new \InvalidArgumentException(sprintf("Can't convert from %s to %s", $categoryFrom, $categoryTo));
        }
    }

} 