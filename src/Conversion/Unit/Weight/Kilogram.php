<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Kilogram implements UnitInterface
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
    public function supports($symbol)
    {
        return 'kg' === $symbol;
    }

    /**
     * {@inheritDoc}
     */
    public function toBase($value)
    {
        return $value * 1000;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value * 0.001;
    }
}