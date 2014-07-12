<?php

class Element
{
	public function getElementIndex($min, $max)
	{
		$result = rand($min, $max); 
		return $result;
	}		
}

?>