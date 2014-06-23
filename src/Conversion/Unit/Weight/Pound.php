<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Pound implements UnitInterface
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
        return $value * 453.6;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value * 0.002205;
    }
}