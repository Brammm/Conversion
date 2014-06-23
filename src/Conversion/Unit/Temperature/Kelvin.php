<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Kelvin implements UnitInterface
{

    /**
     * {@inheritDoc}
     */
    public function converts()
    {
        return UnitInterface::TEMPERATURE;
    }

    /**
     * {@inheritDoc}
     */
    public function toBase($value)
    {
        return $value + 273.15;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value - 273.15;
    }
}