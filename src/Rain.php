<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge;

/**
 * Class Rain
 * @package ClimaTempo\Challenge
 */
class Rain
{
    /**
     * @var int
     */
    protected $probability;

    /**
     * @var int
     */
    protected $precipitation;

    /**
     * Rain constructor.
     * @param int $probability
     * @param int $precipitation
     */
    public function __construct(int $probability, int $precipitation)
    {
        $this->probability = $probability;
        $this->precipitation = $precipitation;
    }

    /**
     * @return int
     */
    public function getProbability(): int
    {
        return $this->probability;
    }

    /**
     * @return int
     */
    public function getPrecipitation(): int
    {
        return $this->precipitation;
    }

}