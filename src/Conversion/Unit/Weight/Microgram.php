<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Microgram implements UnitInterface
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
        return $value * 0.000001;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value * 1000000;
    }
}