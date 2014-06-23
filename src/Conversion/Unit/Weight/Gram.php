<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Gram implements UnitInterface
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
        return $value;
    }

    /**
     * {@inheritDoc}
     */
    public function fromBase($value)
    {
        return $value;
    }
}