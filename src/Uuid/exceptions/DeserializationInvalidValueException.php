<?php

namespace Mhujer\JmsSerializer\Uuid;

class DeserializationInvalidValueException
	extends \Exception
	implements \Mhujer\JmsSerializer\Uuid\Exception
{

	/** @var string */
	private $fieldPath;

	/**
	 * @param string $fieldPath
	 * @param \Exception $exception
	 */
	public function __construct($fieldPath, \Exception $exception)
	{
		parent::__construct(
			sprintf('Invalid value in field %s: %s', $fieldPath, $exception->getMessage()),
			0,
			$exception
		);
		$this->fieldPath = $fieldPath;
	}

	/**
	 * @return string
	 */
	public function getFieldPath()
	{
		return $this->fieldPath;
	}

}
