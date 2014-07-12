<?php

class Gase extends Element implements Soluble
{
	function __construct() {
		$this->min = 10;
		$this->max = 50;
		$this->type = "Gase";
		$this->element_group = 1;
	}

	public function getSolubleIndex($element_index)
	{
		return $element_index + 1;
	}

	public function getPercentIndex()
	{
		$element_index = $this->getElementIndex($this->min, $this->max);
		return $element_index/100;
	}
}

?>