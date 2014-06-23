<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Milligram implements UnitInterface
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
        return 'mg' === $symbol;
    }

    /**
     * {@inheritDoc}
     */
    public function toBase($value)
    {
        return $value * 0.001;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value * 1000;
    }
}