<?php

namespace Conversion\Unit;

/**
 * Provide value object interface for all units
 *
 * Interface UnitInterface
 */
abstract class UnitInterface
{
    private $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Return the value for this unit
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The calculation needed to get to a base
     *
     * @return float
     */
    abstract public function toBase();
}