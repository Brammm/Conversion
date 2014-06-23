<?php

namespace Conversion\Converter;

use Conversion\Unit\UnitRegistry;
use Conversion\Unit\UnitInterface;

class Converter
{

    /** @var UnitInterface */
    private $unitFrom;
    /** @var UnitInterface */
    private $unitTo;

    /** @var UnitRegistry */
    private $registry;

    function __construct(UnitRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * Sets from which unit you wish to convert
     *
     * @param $symbol
     *
     * @return $this
     */
    public function from($symbol)
    {
        $this->unitFrom = $this->registry->getUnit($symbol);
        return $this;
    }

    /**
     * Sets to which unit you wish to convert
     *
     * @param $symbol
     *
     * @return $this
     */
    public function to($symbol)
    {
        $this->unitTo = $this->registry->getUnit($symbol);
        return $this;
    }

    /**
     * Converts a value from one unit to another
     *
     * @param $value
     *
     * @return float
     */
    public function convert($value)
    {
        $this->protectInvalidConversion();

        $base      = $this->unitFrom->toBase($value);
        $converted = $this->unitTo->fromBase($base);

        return $converted;
    }

    /**
     * Checks if the conversion is valid
     *
     * @throws \LogicException
     * @throws \InvalidArgumentException
     */
    public function protectInvalidConversion()
    {
        if (null === $this->unitTo || null === $this->unitFrom) {
            throw new \LogicException('Please set which units you want to convert from or to');
        }

        if ($this->unitFrom->converts() !== $this->unitTo->converts()) {
            throw new \InvalidArgumentException(sprintf(
                "Can't convert from %s to %s",
                $this->unitFrom->converts(),
                $this->unitTo->converts()
            ));
        }
    }

} 