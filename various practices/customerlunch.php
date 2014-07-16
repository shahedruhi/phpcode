<?php

 //declaring a class
class BillCalculator {
	public $rice_Unit;
	private $rice_Unit_Price = 20;
	public $vegetable_Unit;
	private $vegetable_Unit_Price = 30;
	public $fish_Unit;
	private $fish_Unit_Price = 80;
	public $meat_Unit;
	private $meat_Unit_Price = 120;
	public $bill_Vat;
	public $gross_total;
	

	public function get_gross_total()
	{

		return ($this->rice_Unit * $this->rice_Unit_Price) + ($this->vegetable_Unit * $this->vegetable_Unit_Price) + ($this->fish_Unit * $this->fish_Unit_Price) + ($this->meat_Unit * $this->meat_Unit_Price); 
		
	}

		public function get_payable_amount()
	{

		return $this->gross_total + ($this->gross_total * ($this->bill_Vat / 100));  
		
	}


}
?>