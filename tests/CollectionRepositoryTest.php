<?php

namespace ClimaTempo\Challenge\Tests;

use Doctrine\Common\Collections\{ArrayCollection, Criterea};
use ClimaTempo\Challenge\Exception\EntityNotFoundException;
use ClimaTempo\Challenge\{CollectionRepository, EntityInterface, Id};
use PHPUnit\Framework\TestCase;

class JsonRepositoryTest extends TestCase
{
	public function testFindOneDeveLancarExceptionQuandoNaoForEncontrado()
	{
		$this->expectException(EntityNotFoundException::class);
		$collection = new ArrayCollection();
		$repository = new CollectionRepository($collection);
		$repository->findOne(new Id(1234));
	}

	public function testFindOneDeveRetornarEntityQuandoEncontrada()
	{
		$id = new Id(1);
		$entity = $this->getMockForAbstractClass(EntityInterface::class);
		$entity->expects($this->once())
			->method('getId')
			->willReturn($id);
		$collection = new ArrayCollection([$entity]);

		$repository = new CollectionRepository($collection);
		$this->assertSame($entity, $repository->findOne($id));
	}

}
