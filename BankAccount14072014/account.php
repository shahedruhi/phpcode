
<?php

 //declaring a class
class Account {
	
	private $name;
	private $number;
	private $balance;

	public function get_name()
	{
		return $this->name;
	}

	public function get_number()
	{
		return $this->number;
	}

	public function get_balance()
	{
		return $this->balance;
	}

	function __construct($name, $number)
	{
		$this->name = $name;
		$this->number = $number;
		$this->balance = 0;
		
	}

	public function deposit($amount)
	{
		$this->balance = $this->balance + $amount;
	}

	public function withdraw($amount)
	{
		if ($this->balance - $amount >= 0)
		{
			$this->balance = $this->balance - $amount;
			return "withdrawn";
		}
		else 
		{
			return "Insufficient Balance";	
		}

		
	}


}
?>