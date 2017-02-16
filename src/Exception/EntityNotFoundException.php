<?php
declare(strict_types=1);

namespace ClimaTempo\Challenge\Exception;

use LogicException;

class EntityNotFoundException extends LogicException
{
	protected $message = 'Entity not found';
}