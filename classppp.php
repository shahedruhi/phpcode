<?php

 class User
 {
	protected function userAge() {
	return 'some value';
	}	
 }
 
 class Person extends User
 {
	public function getUserAge()
	{
		return $this->userAge();
	}
 }	
 
 $person = new Person();
 echo $person->getUserAge();
 echo "<br />";
 echo $person->userAge();
 

?>
