<?php

 //declaring a class
class OfficeEmployee {
	public $id;
	public $name;
	public $salary;
	private $low_limit = 10000;
	private $high_limit = 30000;
	private $first_increment_percentage = 0.5;
	private $first_increment_percentage = 0.3;
	private $first_increment_percentage = 0.2;


	public function get_salary_with_bonus()
	{

		if ($this->salary <= 10000)
			return $this->salary + $this->salary * 0.5;
		else if ($this->salary > 10000 && $this->salary <= 30000 )
			return $this->salary + $this->salary * 0.3;
		else if ($this->salary > 30000)
			return $this->salary + $this->salary * 0.2;

		//return  $this->salary + 5000;
	}

}

?>