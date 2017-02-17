<?php

namespace ClimaTempo\Challenge\Tests\Infra;

use ClimaTempo\Challenge\Infra\Id;
use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
	public function testConstrutor()
	{
		$id = new Id(123);
		$this->assertSame(123, $id->getValue());
	}
}