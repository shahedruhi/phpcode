
<?php

 //declaring a class
class Person {
	
	private $first_Name;
	private $middle_Name;
	private $last_Name;

	function __construct($first_name, $middle_name, $last_name)
	{
		$this->first_Name = $first_name;
		$this->midddle_Name = $middle_name;
		$this->last_Name = $last_name;
	}

	/*public function set_first_name($first_name)
	{
		if (strlrn($first_name) >= 2)
		{
			$this->first_Name = $first_name;
		}
	}

	public function get_first_name()
	{
		return $this->first_Name;
	}

	public function set_last_name($last_name)
	{
		$this->last_Name = $last_name;
	}

	public function get_last_name()
	{
		return $this->last_Name;
	}
	
	*/
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


}
?>