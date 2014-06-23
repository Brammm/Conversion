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
            'g'  => new Weight\Gram(),
            'kg' => new Weight\Kilogram(),
            'mg' => new Weight\Milligram(),
            'ug' => new Weight\Microgram(),
            'oz' => new Weight\Ounce(),
            'lb' => new Weight\Pound(),
            'C'  => new Temperature\Celsius(),
            'F'  => new Temperature\Fahrenheit(),
            'K'  => new Temperature\Kelvin(),
        ];
    }

    public function addUnit($symbol, UnitInterface $unit)
    {
        $this->units[$symbol] = $unit;
    }
    
    /**
     * @param $symbol
     *
     * @return UnitInterface
     * @throws \InvalidArgumentException
     */
    public function getUnit($symbol)
    {
        if (isset($this->units[$symbol])) {
            return $this->units[$symbol];
        }

        throw new \InvalidArgumentException(sprintf('Unit "%s" not recognized', $symbol));
    }
} 