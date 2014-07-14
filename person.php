
<?php

 //declaring a class
class Person {
	
	public $first_Name;
	public $middle_Name;
	public $last_Name;
	
	
	public function get_full_name()
	{
		return $this->first_Name.' '.$this->middle_Name.' '.$this->last_Name;
	}

	public function get_reverse_name()
	{
		$full_name = $this->get_full_name();
		$reverse_name = strrev($full_name);
		return $reverse_name;
	}

	/*public function get_total_hours()
	{
		
	}

	public function get_total_days()
	{
		
	}

	public function get_total_months()
	{
		
	}

	public function get_total_years()
	{
		
	}
	*/	

}
?>