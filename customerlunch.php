<?php

 //declaring a class
class BillCalculator {
	public $rice_Unit;
	public $vegetable_Unit;
	public $fish_Unit;
	public $meat_Unit;
	public $bill_Vat;
	

	public function get_gross_total()
	{

		return $this->principal_Amount + (($this->principal_Amount * ($this->annual_interest_rate / 100)) * $this->time_period);  
		
	}

		public function get_payable_amount()
	{

		return $this->principal_Amount + (($this->principal_Amount * ($this->annual_interest_rate / 100)) * $this->time_period);  
		
	}


}
?>