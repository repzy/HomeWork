<?php

class Metall extends Element implements Soluble
{
	function __construct() {
		$this->min = 50;
		$this->max = 90;
		$this->type = "Metall";
		$this->element_group = 3;
	}

	public function getSolubleIndex($element_index)
	{
		return $element_index + 3;
	}

	public function getPercentIndex()
	{
		$element_index = $this->getElementIndex($this->min, $this->max);
		return $element_index/100;
	}
}

?>