<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge\Tests;

use ClimaTempo\Challenge\Exception\InvalidTemperatureException;
use ClimaTempo\Challenge\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{

    public function testConstructor()
    {
        $min = 20;
        $max = 30;

        $temperature = new Temperature($min, $max);
        $this->assertEquals($min, $temperature->getMin());
        $this->assertEquals($max, $temperature->getMax());
    }

    public function testCreateInvalidTemperatureMustThrowException()
    {
        $this->expectException(InvalidTemperatureException::class);

        new Temperature(20, 15);
    }
}
