
<?php

//array
$cars = array('toyota','sedan','ford');
$cars[] = 'premio';
$cars[8] = 'suzuki';
$cars[] = 'audi';
$cars['c'] = 'ford';
$cars[] = 'zing';

//echo gettype($cars);
 
//sort($cars);

/*$length=count($cars);
for($x=0;$x<$length;$x++)
   {
   echo $cars[$x], "<br>";
   }
*/
//echo "<pre>";
//print_r($cars);
//echo "</pre>";

//associative array

$fruits = array('a'=>'apple', 'b'=>'banana');

//$fruits[""] = 'this is';
//echo "<pre>";
//print_r($fruits);
//echo "</pre>";
//echo $fruits['b']; 

$arr2D = array($cars,$fruits);
echo "<pre>";
print_r($arr2D);
echo "</pre>";

echo $arr2D[1]['b'];


?>

