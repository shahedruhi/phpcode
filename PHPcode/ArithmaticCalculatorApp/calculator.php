<?php

 //declaring a class
class Calculator {
	
	public $first_No;
	public $second_No;


	public function do_add($first_no, $second_no)
	{

		return $first_no + $second_no; 
		
	}

	public function do_subtract($first_no, $second_no)
	{

		return $first_no - $second_no; 
		
	}

	public function do_multiply($first_no, $second_no)
	{

		return $first_no * $second_no; 
		
	}

	public function do_divide($first_no, $second_no)
	{

		return $first_no / $second_no; 
		
	}


}
?>