<?php

 //declaring a class
class InterestCalculator {
	public $principal_Amount;
	public $annual_interest_rate;
	public $time_period;

	public function get_total_amount()
	{

		return $this->principal_Amount + (($this->principal_Amount * ($this->annual_interest_rate / 100)) * $this->time_period);  
		
	}


}
?>