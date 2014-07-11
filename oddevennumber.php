<?php

$end_number_series = 100; //put last number of the series

for ($i = 0; $i <= $end_number_series; $i++)
{
	if ($i % 2 == 0) //for finding even numbers.
	{
	echo "Even Number ";
	echo $i;
	echo "<br>";
	}
	else //for finding Odd numbers.
	{
	echo "Odd Number ";
	echo $i;
	echo "<br>";
	}
	
}

?>