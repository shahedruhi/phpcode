
<?php

function getgrade($mark)
{

$grade = '';

if($mark  >= 0 && $mark  <= 100)
{
if($mark  >= 80)
    $grade = 'A+';
elseif ($mark  >= 70)
    $grade = 'A';
elseif ($mark  >= 60)
    $grade = 'A-';
elseif ($mark  >= 50)
    $grade = 'B';
elseif ($mark  >= 40)
    $grade = 'C';
elseif ($mark  >= 33)
    $grade = 'D';
else
    $grade = 'F';
}
else
	$grade = 'put the right number';
	
return $grade;
}

$finalgrade = getgrade(6);

echo $finalgrade;

$cards = array
		(
			'red' => array(1,2,3,4),
			'blue' => array(1,2,3,4),
			
		
		
		
		);


/*
if($mark  >= 0 && $mark  <= 100)

{
if($mark  >= 80)
    echo "Your final grade for the course will be: A+ <br />";
elseif ($mark  >= 70)
    echo "Your final grade for the course will be: A  <br />";
elseif ($mark  >= 60)
    echo "Your final grade for the course will be: A-  <br />";
elseif ($mark  >= 50)
    echo "Your final grade for the course will be: B  <br />";
elseif ($mark  >= 40)
    echo "Your final grade for the course will be: C  <br />";
elseif ($mark  >= 33)
    echo "Your final grade for the course will be: D  <br />";
else
    echo "Your final grade for the course will be: F  <br />";
}

else
	echo "put the right number   <br />";
*/	
?>

