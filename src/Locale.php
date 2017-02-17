<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge;

use ClimaTempo\Challenge\Infra\Id;

/**
 * Class Locale
 * @package ClimaTempo\Challenge
 */
class Locale
{

    /**
     * @var Id
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * Locale constructor.
     * @param Id $id
     * @param string $name
     * @param string $state
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(Id $id, $name, $state, $latitude, $longitude)
    {
        $this->id = $id;
        $this->name = $name;
        $this->state = $state;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return Id
     */
    public function getId(): Id
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
}