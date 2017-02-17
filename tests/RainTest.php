<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge\Tests;

use ClimaTempo\Challenge\Rain;
use PHPUnit\Framework\TestCase;

class RainTest extends TestCase
{

    public function testConstructor()
    {

        $probability = 60;
        $precipitation = 20;

        $rain = new Rain($probability, $precipitation);
        $this->assertEquals($probability, $rain->getProbability());
        $this->assertEquals($precipitation, $rain->getPrecipitation());
    }
}
