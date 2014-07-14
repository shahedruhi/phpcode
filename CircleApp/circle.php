<?php

 //declaring a class
class Circle {
	
	public $circle_Radius;
	//public $pie = 3.14;
	
	

	/*public function get_diameter()
	{

		return $this->circle_Radius * 2;
		
	}

		public function get_perimeter()
	{

		return $this->circle_Radius * 2 * $this->pie; 
		
	}*/

	public function get_area()
	{
		//$pie = pi();
		return $this->circle_Radius * $this->circle_Radius * M_PI; 
		
	}


}
?>