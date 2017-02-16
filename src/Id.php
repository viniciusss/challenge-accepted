<?php
namespace ClimaTempo\Challenge;

class Id
{
	/** 
	 * @var mixed
	 */
	protected $value;

	public function __construct($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}
}