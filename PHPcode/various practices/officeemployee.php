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

 /*(var $id = '';
 var $name = '';
 var $salary = '';
 
 function __construct($id, $name, $salary)
 {
	$this->id = $id;
	$this->name = $name;
	$this->salary = $salary;

	echo $id, $name, $salary; 
 }
 
}
/*function getName()
 {
	return $this->name;
 }
 
 }
 */

 //initiating a object
 //$user = new User('007', 'james', 10000)
 //$user1->id = 007;
 //$user1->name = 'James';
 //$user1->salary = 10000;
 
 //$user2 = new User('a','d@c.com'); 
 //$user2->name = 'FTFL2'; 
 
 
 //var_dump($user1);
 //var_dump($user2);
  
 //echo $user1->getName();
 //echo $user2->getName();
 

?>
