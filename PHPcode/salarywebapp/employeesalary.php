<?php

 //declaring a class
class SalaryCalculator {
	public $employee_name;
	public $basic_amount;
	public $house_rent;
	public $medical_allowence;


	public function get_total_salary()
	{

		$basic_amount = $this->basic_amount;
		$house_rent = $basic_amount * ($this->house_rent / 100);
		$medical_allowence = $basic_amount * ($this->medical_allowence / 100);
		$total_salary = $basic_amount + $house_rent + $medical_allowence;
		return $total_salary;
		//return $this->basic_amount + ($this->basic_amount * ($this->house_rent / 100)) + ($this->basic_amount * ($this->medical_allowence / 100)) ;  
		
	}


}
?>