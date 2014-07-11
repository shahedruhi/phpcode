
<?php
//1. addcslashes

//echo addcslashes('foo[ ]', 'A..z');
// output:  \f\o\o\[ \]
// All upper and lower-case letters will be escaped
// ... but so will the [\]^_`
//echo addcslashes("zoo['.']", 'z..A');
// output:  \zoo['\.']

//2. addslashes

//$str = "Is your name O'reilly?";

// Outputs: Is your name O\'reilly?
//echo addslashes($str);

//3.   convert_uuencode
//$some_string = "test\ntext text\r\n";

//echo convert_uuencode($some_string);

//4. crc32
//$checksum = crc32("The quick brown fox jumped over the lazy dog.");
//printf("%u\n", $checksum);

//5. explode
// Example 1
/*$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // 

 
$input1 = "hello";
$input2 = "hello,there";
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );
*/

/*$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""
*/
//10. lcfirst

$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

echo $foo;

$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);             // hELLO WORLD!
$bar = lcfirst(strtoupper($bar)); // hELLO WORLD!

echo $bar;



?>

