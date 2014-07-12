<?php

class Salt extends Element implements Soluble
{
	function __construct() {
		$this->min = 40;
		$this->max = 70;
		$this->type = "Salt";
		$element_group = 2;
	}	

	public function getSolubleIndex($element_index)
	{
		return $element_index + 2;
	}

	public function getPercentIndex()
	{
		$element_index = $this->getElementIndex($this->min, $this->max);
		return $element_index/100;
	}
}

?>