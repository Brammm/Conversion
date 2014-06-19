<?php

namespace Conversion\Unit;

use Conversion\Unit;

class UnitFactory
{

    /**
     * @param $unit
     *
     * @return UnitInterface
     * @throws \InvalidArgumentException
     */
    public static function getUnit($unit)
    {
        switch ($unit) {
            // weight
            case Weight\Gram::SYMBOL:
                return new Weight\Gram();
            break;
            case Weight\Kilogram::SYMBOL:
                return new Weight\Kilogram();
            break;
            case Weight\Milligram::SYMBOL:
                return new Weight\Milligram();
            break;
            case Weight\Microgram::SYMBOL:
                return new Weight\Microgram();
            break;
            case Weight\Ounce::SYMBOL:
                return new Weight\Ounce();
            break;
            case Weight\Pound::SYMBOL:
                return new Weight\Pound();
            break;
            default:
               throw new \InvalidArgumentException(sprintf('Unit "%s" not recognized'));
        }
    }
} 