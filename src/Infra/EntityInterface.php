<?php
declare(strict_types=1);

namespace ClimaTempo\Challenge\Infra;

/**
 * Interface EntityInterface
 * @package ClimaTempo\Challenge
 */
interface EntityInterface
{
    /**
     * @return Id
     */
	public function getId(): Id;
}