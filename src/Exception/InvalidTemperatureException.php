<?php
declare(strict_types = 1);

namespace ClimaTempo\Challenge\Exception;

use LogicException;

/**
 * Class InvalidTemperatureException
 * @package ClimaTempo\Challenge\Exception
 */
class InvalidTemperatureException extends LogicException
{
    protected $message = 'Invalid temperature';
}