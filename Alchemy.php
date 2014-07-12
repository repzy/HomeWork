<?php

class Alchemy 
{
	function __construct() {
		$this->criterion = 4;
	}

	public function welcome()
	{
		echo "Hello. I am a great alchemist. Give me two items and I will dissolve them.";
		echo "<br>";
	}

	public function no_element()
	{
		echo "No elements selected. Please, choose two elements.";
		echo "<br>";
	}

	public function no_reaction()
	{
		echo "Very sorry, no reaction occurred.";
		echo "<br>";
	}

	public function reaction()
	{
		echo "Congratulation. Reaction successfully occurred";
		echo "<br>";
	}	

	public function return_reaction()
	{
		echo "Reaction returned";
		echo "<br>";
	}

	public function dissolve(Soluble $elem_1, Soluble $elem_2)
	{
		$element_index_1 = $elem_1->getPercentIndex();
		$result_1 = $elem_1->getSolubleIndex($element_index_1);
		echo "Element index of ".$elem_1->type." : ".$element_index_1."%";
		echo "<br>";
		echo "Soluble index of ".$elem_1->type." : ".$result_1;
		echo "<br><br>";

		$element_index_2 = $elem_2->getPercentIndex();
		$result_2 = $elem_2->getSolubleIndex($element_index_2);
		echo "Element index of ".$elem_2->type." : ".$element_index_2."%";
		echo "<br>";
		echo "Soluble index of ".$elem_2->type." : ".$result_2;
		echo "<br><br>";

		$dissolve_index = $result_1 + $result_2;
		echo "Dissolve index: ".$dissolve_index;
		echo "<br><br>";
		return $dissolve_index;
	}

	public function getReaction($final_index)
	{
		if($final_index > $this->criterion)
		{
			$timestamp = time();
			$this->reaction();
			if($timestamp % 10 == 0)
			{
				$this->return_reaction();
			}
		}else
		{
			$this->no_reaction();
		}
	}
}

?>