<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Celsius implements UnitInterface
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
        return 'C' === $symbol;
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