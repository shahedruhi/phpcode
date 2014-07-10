
<?php


/*
    $total = 0;
	$startnumber = 5;
	$endnumber = 6;
	
	
for($sum = $startnumber; $sum <= $endnumber; $sum++)
   {
    $total = $total + $sum;
   }
	
	echo "addition is : $total";
*/

//for each loop

$cars = array('toyota', 'sedan', 'mercidise');
$fruits = array("t"=>'test', "a"=>'appale',"c"=>'cat');

/*for( $i=0; $i < count($cars), $i++){

	echo $cars[$i]."<br />";	
	
	}
	*/
//foreach($fruits as $value)
foreach($fruits as $key=>$value)
{	
	echo $key.'--'.$value."<br />";
	
}
	
/*$cards = array
		(
			'red' => array(1,2,3,4),
			'blue' => array(1,2,3,4),
			'green' => array(1,2,3,4),
			'yellow' => array(1,2,3,4),
		);
*/ 
?>

