
<?php
//echo "Hello FTFL";

//Syntax, Exercise

//variables

$a = 1;

//block
//nested

//{
//	{
//	}
//}

//Data Type | type casting

//$_aNumber = 1234;
//echo gettype($_aNumber);
//echo "<br>";
//echo settype($_aNumber, 'String');
//echo "<br>";
//echo gettype($_aNumber);

//$_aString = abcd; 
//$_aString = 'abcd$aNumber';
//$_anotherString = "abcd$aNumber";
//echo gettype($_aString);
//echo gettype($_anotherString);

//echo $_aString;
//echo "<br>";
//echo $_anotherString;
//echo "<br>";

/*$aFlotedNumber = 12.12;
//echo gettype($aFlotedNumber);

$_aBool = true;
$x=true;
$y=false;
 
$a = 2*3+5;
//echo $a."<br />".$a;
//echo nl2br($a."\n".$a);

$name = 'S.M. Shahed Ruhi'; 
for ($i=1; $i<=5; $i++)
{
//echo $name, "<br>";
//echo "<br>";
}

$tr = array("1","2","3");
sort($tr);

$l=count($tr);
for($x=0;$x<$l;$x++)
   {
   //echo $tr[$x], "<br>";
   }

*/
$x = 100 / (2*5);
$y = 100 % (2*5);
$z = 100 / 2 * 5;
$a = 0 / 5;
$b = 0 % 5;

echo $x."<br />";
echo $y."<br />";
echo $z."<br />";
echo $a."<br />";
echo $b."<br />";

echo "<br />------------------------------<br />";
//Unary operators 
//increment/decrement
//pre/post 
$a = 2;

echo $a++."<br />";
echo $a--."<br />";
echo ++$a."<br />";
echo --$a."<br />";
echo $a."<br />";

echo "<br />------------------------------<br />";
echo $a.PHP_EOL;
echo ++$a;
echo "<br />------------------------------<br />";

$a=4;
$b=2;
echo ++$a * ($a++ + --$b);
echo "<br />------------------------------<br />";
$a = 0;
//$a = ' ';
echo (bool) $a;

//comparison

$a = 3;
$b = 5;

if ( 3 == $a){
echo "Hello";
}

echo "<br />------------------------------<br />";

//value & type true

if ( 3 === $a){
echo "Hello";
}





 

?>

