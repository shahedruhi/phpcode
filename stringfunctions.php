
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
$some_string = "test\ntext text\r\n";

echo convert_uuencode($some_string);

?>

