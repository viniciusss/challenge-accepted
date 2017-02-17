<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge\Tests;

use ClimaTempo\Challenge\Rain;
use ClimaTempo\Challenge\Temperature;
use ClimaTempo\Challenge\Weather;
use PHPUnit\Framework\TestCase;

/**
 * Class WeatherTest
 * @package ClimaTempo\Challenge\Tests
 */
class WeatherTest extends TestCase
{

    public function testConstructor()
    {
        $date = new \DateTime();
        $text = 'Sol com muitas nuvens durante o dia. Períodos de nublado, com chuva a qualquer hora.';
        $temperature = new Temperature(20, 28);
        $rain = new Rain(60, 20);

        $weather = new Weather($date, $text, $temperature, $rain);

        $this->assertEquals($date, $weather->getDate());
        $this->assertEquals($text, $weather->getText());
        $this->assertEquals($temperature, $weather->getTemperature());
        $this->assertEquals($rain, $weather->getRain());
    }
}
