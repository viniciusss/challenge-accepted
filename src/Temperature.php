<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge;

use ClimaTempo\Challenge\Exception\InvalidTemperatureException;

/**
 * Class Temperature
 * @package ClimaTempo\Challenge
 */
class Temperature
{
    /**
     * @var int
     */
    protected $min;

    /**
     * @var int
     */
    protected $max;

    /**
     * Temperature constructor.
     * @param int $min
     * @param int $max
     */
    public function __construct(int $min, int $max)
    {
        if ($min > $max) {
            throw new InvalidTemperatureException();
        }
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

}