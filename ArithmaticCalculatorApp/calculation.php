<?php

 //declaring a class
class Calculation {
	
	public $first_No;
	public $second_No;


	public function get_adddition()
	{

		return $this->first_No + $this->second_No; 
		
	}

	public function get_subtraction()
	{

		return $this->first_No - $this->second_No; 
		
	}

	public function get_multiplication()
	{

		return $this->first_No * $this->second_No; 
		
	}

	public function get_division()
	{

		return $this->first_No / $this->second_No; 
		
	}


}
?>