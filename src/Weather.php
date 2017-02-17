<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge;

use DateTime;

/**
 * Class Weather
 * @package ClimaTempo\Challenge
 */
class Weather
{

    /**
     * @var DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var Temperature
     */
    protected $temperature;

    /**
     * @var Rain
     */
    protected $rain;

    /**
     * Weather constructor.
     * @param DateTime $date
     * @param string $text
     * @param Temperature $temperature
     * @param Rain $rain
     */
    public function __construct(DateTime $date, string $text, Temperature $temperature, Rain $rain)
    {
        $this->date = $date;
        $this->text = $text;
        $this->temperature = $temperature;
        $this->rain = $rain;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return Temperature
     */
    public function getTemperature(): Temperature
    {
        return $this->temperature;
    }

    /**
     * @return Rain
     */
    public function getRain(): Rain
    {
        return $this->rain;
    }
}