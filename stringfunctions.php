
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

/*$foo = 'HelloWorld';
$foo = lcfirst($foo);             // helloWorld

echo $foo;

$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);             // hELLO WORLD!
$bar = lcfirst(strtoupper($bar)); // hELLO WORLD!

echo $bar;
*/
//11. levenshtein
/*
// input misspelled word
$input = 'carrrot';

// array of words to check against
$words  = array('apple','pineapple','banana','orange',
                'radish','carrot','pea','bean','potato');

// no shortest distance found, yet
$shortest = -1;

// loop through words to find the closest
foreach ($words as $word) {

    // calculate the distance between the input word,
    // and the current word
    $lev = levenshtein($input, $word);

    // check for an exact match
    if ($lev == 0) {

        // closest word is this one (exact match)
        $closest = $word;
        $shortest = 0;

        // break out of the loop; we've found an exact match
        break;
    }

    // if this distance is less than the next found shortest
    // distance, OR if a next shortest word has not yet been found
    if ($lev <= $shortest || $shortest < 0) {
        // set the closest match, and shortest distance
        $closest  = $word;
        $shortest = $lev;
    }
}

echo "Input word: $input\n";
if ($shortest == 0) {
    echo "Exact match found: $closest\n";
} else {
    echo "Did you mean: $closest?\n";
}
*/
//12. localeconv
/*if (false !== setlocale(LC_ALL, 'nl_NL.UTF-8@euro')) {
    $locale_info = localeconv();
    print_r($locale_info);
}
*/
//13. ltrim
/*$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";


$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the beginning of $binary
// (from 0 to 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);
*/

//14. md5_file
//$file = 'php-5.3.0alpha2-Win32-VC9-x64.zip';

//

//15. md5
/*$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
*/

//16. metaphone
//var_dump(metaphone('programming'));
//var_dump(metaphone('programmer'));

//17. money_format
/*$number = 1234.56;

// let's print the international format for the en_US locale
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";
// USD 1,234.56

// Italian national format with 2 decimals`
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%.2n', $number) . "\n";
// Eu 1.234,56

// Using a negative number
$number = -1234.5672;

// US national format, using () for negative numbers
// and 10 digits for left precision
setlocale(LC_MONETARY, 'en_US');
echo money_format('%(#10n', $number) . "\n";
// ($        1,234.57)

// Similar format as above, adding the use of 2 digits of right
// precision and '*' as a fill character
echo money_format('%=*(#10.2n', $number) . "\n";
// ($********1,234.57)

// Let's justify to the left, with 14 positions of width, 8 digits of
// left precision, 2 of right precision, withouth grouping character
// and using the international format for the de_DE locale.
setlocale(LC_MONETARY, 'de_DE');
echo money_format('%=*^-14#8.2i', 1234.56) . "\n";
// Eu 1234,56****

// Let's add some blurb before and after the conversion specification
setlocale(LC_MONETARY, 'en_GB');
$fmt = 'The final value is %i (after a 10%% discount)';
echo money_format($fmt, 1234.56) . "\n";
// The final value is  GBP 1,234.56 (after a 10% discount)
*/
//18. nl2br

/*echo nl2br("foo isn't\n bar");
$string = "This\r\nis\n\ra\nstring\r";
echo nl2br($string);
*/
//19. number_format
/*$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
// 1,235

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

$number = 1234.5678;

// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', '');
// 1234.57
echo $english_format_number;
*/
//20. ord
/*$str = "\n";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
}
*/
//21. parse_str
/*$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first."<br />";  // value
echo $arr[0]."<br />"; // foo bar
echo $arr[1]."<br />"; // baz

parse_str($str, $output);
echo $output['first']."<br />";  // value
echo $output['arr'][0]."<br />"; // foo bar
echo $output['arr'][1]."<br />"; // baz
*/
//22. print
/*print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

// You can use variables inside a print statement
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// You can also use arrays
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // this is foo !

// Using single quotes will print the variable name, not the value
print 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just print variables
print $foo;          // foobar

print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
*/
//23. printf
/*$format = 'The %2$s contains %1$d monkeys.
         That is a nice %2$s full of %1$d monkeys.';
printf($format, $num, $location); 
*/
//24. quoted_printable_decode
//25. rtrim
/*$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);
*/
//26. setlocale
/* Set locale to Dutch */
//setlocale(LC_ALL, 'nl_NL');

/* Output: vrijdag 22 december 1978 */
//echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* try different possible locale names for german as of PHP 4.3.0 */
//$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
//echo "Preferred locale for german on this system is '$loc_de'";

//27. sha1_file
/*foreach(glob('/home/Kalle/myproject/*.php') as $ent)
{
    if(is_dir($ent))
    {
        continue;
    }

    echo $ent . ' (SHA1: ' . sha1_file($ent) . ')', PHP_EOL;
}*/

//28. sha1

/*$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
}*/

//29. similar_text
/*$var_1 = 'PHP IS GREAT';
$var_2 = 'WITH MYSQL';

similar_text($var_1, $var_2, $percent);

echo $percent;
// 27.272727272727

similar_text($var_2, $var_1, $percent);

echo $percent;
*/
// 18.181818181818 
//30. sprintf
/*$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
*/

//31. sscanf
// getting the serial number
//list($serial) = sscanf("SN/2350001", "SN/%d");
// and the date of manufacturing
//$mandate = "January 01 2000";
//list($month, $day, $year) = sscanf($mandate, "%s %d %d");
//echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";

//32. str_pad
/*$input = "Alien";
echo str_pad($input, 10);                      // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo str_pad($input, 6 , "___");               // produces "Alien_"
*/
//33. str_repeat
//echo str_repeat("-=", 10);
//34. str_replace
// Provides: <body text='black'>
/*$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;

$input = "Alien";
echo str_pad($input, 10)."<br />";                      // produces "Alien     "
echo str_pad($input, 10, "*", STR_PAD_LEFT)."<br />";  // produces "-=-=-Alien"
echo str_pad($input, 10, "*", STR_PAD_BOTH)."<br />";   // produces "__Alien___"
echo str_pad($input, 6 , "*")."<br />";               // produces "Alien_"
*/
//35. str_rot13
//echo str_rot13('PHP 4.3.0'); // CUC 4.3.0

//36. str_shuffle
/*$str = 'abcdef';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;
*/
//37. str_split

/*$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);
*/
//38. str_word_count
$str = "Hello fri3nd, you're
       looking          good today!";

print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, 'àáãç3'));

echo str_word_count($str);

?>

