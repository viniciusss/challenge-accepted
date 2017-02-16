<?php
declare(strict_types=1);

namespace ClimaTempo\Challenge;

use Doctrine\Common\Collections\{ArrayCollection, Criteria};
use ClimaTempo\Challenge\Exception\EntityNotFoundException;

class CollectionRepository
{
	/**
	 * @var ArrayCollection
	 */
	private $collection;

	public function __construct(ArrayCollection $collection)
	{
		$this->collection = $collection;
	}

	public function find(Criteria $criterea): ArrayCollection
	{
		return $this->collection->matching($criterea);
	}

	public function findOne(Id $id): EntityInterface
	{
		$result = $this->collection->filter(function(EntityInterface $entity) use($id) {
			return $entity->getId() === $id;
		});

		if ($result->isEmpty()) {
			throw new EntityNotFoundException();
		}

		return $result->first();
	}
}
