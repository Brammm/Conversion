<?php

namespace Conversion\Unit;

use Conversion\Unit;

class UnitRegistry
{

    /** @var UnitInterface[] */
    private $units; 
    
    public function __construct()
    {
        $this->units = [
            new Weight\Gram(),
            new Weight\Kilogram(),
            new Weight\Milligram(),
            new Weight\Microgram(),
            new Weight\Ounce(),
            new Weight\Pound(),
            new Temperature\Celsius(),
            new Temperature\Fahrenheit(),
            new Temperature\Kelvin(),
        ];
    }
    
    /**
     * @param $symbol
     *
     * @return UnitInterface
     * @throws \InvalidArgumentException
     */
    public function getUnit($symbol)
    {
        foreach ($this->units as $unit) {
            if ($unit->supports($symbol)) {
                return $unit;
            }
        }

        throw new \InvalidArgumentException(sprintf('Unit "%s" not recognized', $symbol));
    }
} 