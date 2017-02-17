<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge\Tests;

use ClimaTempo\Challenge\Infra\Id;
use ClimaTempo\Challenge\Locale;
use PHPUnit\Framework\TestCase;

/**
 * Class LocaleTest
 * @package ClimaTempo\Challenge\Tests
 */
class LocaleTest extends TestCase
{
    public function testConstructor()
    {
        $id = new Id(3735);
        $name = 'Osasco';
        $state = 'SP';
        $latitude = -23.5320;
        $longitude = -46.7920;

        $locale = new Locale($id, $name, $state, $latitude, $longitude);

        $this->assertEquals($id, $locale->getId());
        $this->assertEquals($name, $locale->getName());
        $this->assertEquals($state, $locale->getState());
        $this->assertEquals($latitude, $locale->getLatitude());
        $this->assertEquals($longitude, $locale->getLongitude());
    }
}
