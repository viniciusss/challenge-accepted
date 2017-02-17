<?php

namespace ClimaTempo\Challenge\Tests\Infra;

use Doctrine\Common\Collections\{ArrayCollection, ExpressionBuilder, Criteria};
use ClimaTempo\Challenge\Infra\Exception\EntityNotFoundException;
use ClimaTempo\Challenge\Infra\{CollectionRepository, EntityInterface, Id};
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

	public function testFindDevePassarCritereaParaOArrayCollection()
	{
		$entity = new class implements EntityInterface
		{
			protected $id;

			protected $nome;

			public function __construct()
			{
				$this->id = new Id(1);
				$this->nome = 'Abc';
			}

			public function getId(): Id
			{
				return $this->id;
			}

			public function getNome(): string
			{
				return $this->nome;
			}
		};

		$collection = new ArrayCollection([$entity]);
		$repository = new CollectionRepository($collection);

		$eb = new ExpressionBuilder();
		$criterea = new Criteria($eb->contains('nome', 'b'));

		$result = $repository->find($criterea);
		$this->assertCount(1, $result);
		$this->assertSame($result->first(), $entity);
	}

}
