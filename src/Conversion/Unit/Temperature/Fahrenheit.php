<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Fahrenheit implements UnitInterface
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
    public function supports($symbol)
    {
        return 'F' === $symbol;
    }

    /**
     * {@inheritDoc}
     */
    public function toBase($value)
    {
        // Deduct 32, then multiply by 5, then divide by 9
        return ($value - 32) * 5 / 9;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        // Multiply by 9, then divide by 5, then add 32
        return ($value * 9 / 5) + 32;
    }
}