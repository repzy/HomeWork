<?php

class Acid extends Element implements Soluble
{
	function __construct() {
		$this->min = 80;
		$this->max = 100;
		$this->type = "Acid";
		$this->element_group = 4;
	}
	
	public function getSolubleIndex($element_index)
	{
		return $element_index + 4;
	}

	public function getPercentIndex()
	{
		$element_index = $this->getElementIndex($this->min, $this->max);
		return $element_index/100;
	}
}

?>