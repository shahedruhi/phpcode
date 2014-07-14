<?php

 //declaring a class
class Circle {
	
	public $circle_Radius;

	public function get_area()
	{
		
		return $this->circle_Radius * $this->circle_Radius * M_PI; 
		
	}


}
?>