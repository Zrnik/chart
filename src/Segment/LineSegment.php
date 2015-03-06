<?php

namespace Tlapnet\Chart\Segment;

use LogicException;


/**
 * @author Ludek Benedik
 */
class LineSegment
{
	/** @var float */
	private $x;

	/** @var float */
	private $y;


	/**
	 * @param number|string $x
	 * @param float $y
	 */
	function __construct($x, $y)
	{
		if (!is_numeric($x) && !is_string($x)) {
			throw new LogicException("X has to be a int or float or string");
		}

		$this->x = $x;
		$this->y = (float) $y;
	}


	/**
	 * @return number|string
	 */
	public function getX()
	{
		return $this->x;
	}


	/**
	 * @return float
	 */
	public function getY()
	{
		return $this->y;
	}
}
