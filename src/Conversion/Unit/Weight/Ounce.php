<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Ounce implements UnitInterface
{

    /**
     * {@inheritDoc}
     */
    public function converts()
    {
        return UnitInterface::WEIGHT;
    }

    /**
     * {@inheritDoc}
     */
    public function toBase($value)
    {
        return $value * 28.35;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value * 0.03527;
    }
}