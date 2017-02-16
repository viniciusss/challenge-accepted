<?php

namespace ClimaTempo\Challenge\Tests;

use Doctrine\Common\Collections\{ArrayCollection, Criterea};
use ClimaTempo\Challenge\Exception\EntityNotFoundException;
use ClimaTempo\Challenge\{CollectionRepository, Entity, Id};
use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
	public function testConstrutor()
	{
		$id = new Id(123);
		$this->assertSame(123, $id->getValue());
	}
}