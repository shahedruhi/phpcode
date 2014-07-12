
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
/*       looking          good today!";

print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, 'àáãç3'));

echo str_word_count($str);
*/

//39. strcasecmp
/*$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}
*/

//40. strstr
/*
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user; // prints name
*/
// 41. strcmp
/*$var1 = "Hello";
$var2 = "hello";
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in a case sensitive string comparison';
}
*/
//42. strcspn
/*$a = strcspn('abcd',  'apple');
$b = strcspn('abcd',  'banana');
$c = strcspn('hello', 'l');
$d = strcspn('hello', 'world');

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
*/
//43. strip_tags
/*$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
*/
//44. stripos
/*$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Nope, 'a' is certainly not in 'xyz'
if ($pos1 === false) {
    echo "The string '$findme' was not found in the string '$mystring1'";
}

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' is the 0th (first) character.
if ($pos2 !== false) {
    echo "We found '$findme' in '$mystring2' at position $pos2";
}
*/
//45. stripslashes
//$str = "Is your name O\'reilly?";

// Outputs: Is your name O'reilly?
//echo stripslashes($str);

//46. stristr
/*$email = 'USER@EXAMPLE.com';
  echo stristr($email, 'e'); // outputs ER@EXAMPLE.com
  echo stristr($email, 'e', true); // As of PHP 5.3.0, outputs US
*/
//47. strlen
/*  $str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
*/
//48. strnatcmp
/*
$arr1 = $arr2 = array("img12.png", "img10.png", "img2.png", "img1.png");
echo "Standard string comparison\n";
usort($arr1, "strcmp");
print_r($arr1);
echo "\nNatural order string comparison\n";
usort($arr2, "strnatcmp");
print_r($arr2);
*/
//49. strpbrk
/*$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
*/

//50. strpos
/*
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
*/

//51. strrchr
// get last directory in $PATH
/*$PATH = "asd";
$dir = substr(strrchr($PATH, ":"), 1);

// get everything after last newline
$text = "Line 1\nLine 2\nLine 3";
$last = substr(strrchr($text, 10), 1 );
*/
//52. strrev
//echo strrev("Hello world!"); // outputs "!dlrow olleH"
//53. strripos
/*
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
*/
//54. strrpos

/*$foo = "0123456789a123456789b123456789c";

var_dump(strrpos($foo, '7', -5));  // Starts looking backwards five positions
                                   // from the end. Result: int(17)

var_dump(strrpos($foo, '7', 20));  // Starts searching 20 positions into the
                                   // string. Result: int(27)

var_dump(strrpos($foo, '7', 28));  // Result: bool(false)
*/
//55. strspn
// subject does not start with any characters from mask
/*var_dump(strspn("foo", "o"));

// examine two characters from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 2));

// examine one character from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 1));
*/

//56. strstr
/*$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user; // prints name
*/
//57. strtok
/*$string = "This is\tan example\nstring";
// Use tab and newline as tokenizing characters as well 
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
*/

//58. strtolower
/*$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
*/
//59. strtoupper
/*$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
*/
//60. strtr
/*$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);
echo strtr("baab", "ab", "01"),"\n";

$trans = array("ab" => "01");
echo strtr("baab", $trans);
*/

//61. substr_compare
/*echo substr_compare("abcde", "bc", 1, 2); // 0
echo substr_compare("abcde", "de", -2, 2); // 0
echo substr_compare("abcde", "bcg", 1, 2); // 0
echo substr_compare("abcde", "BC", 1, 2, true); // 0
echo substr_compare("abcde", "bc", 1, 3); // 1
echo substr_compare("abcde", "cd", 1, 2); // -1
echo substr_compare("abcde", "abc", 5, 1); // warning
*/
//62. substr_count
/*$text = 'This is a test';
echo strlen($text); // 14

echo substr_count($text, 'is'); // 2

// the string is reduced to 's is a test', so it prints 1
echo substr_count($text, 'is', 3);

// the text is reduced to 's i', so it prints 0
echo substr_count($text, 'is', 3, 3);

// generates a warning because 5+10 > 14
echo substr_count($text, 'is', 5, 10);


// prints only 1, because it doesn't count overlapped substrings
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');
*/
//63. substr_replace
/*$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* These two examples replace all of $var with 'bob'. */
//echo substr_replace($var, 'bob', 0) . "<br />\n";
//echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

/* Insert 'bob' right at the beginning of $var. */
///echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

/* These next two replace 'MNRPQR' in $var with 'bob'. */
//echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
//echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

/* Delete 'MNRPQR' from $var. */
//echo substr_replace($var, '', 10, -1) . "<br />\n";


/*//64. substr
$rest = substr("abcdef", -1);    // returns "f"
echo $rest."<br />";
$rest = substr("abcdef", -2);    // returns "ef"
echo $rest."<br />";
$rest = substr("abcdef", -3, 1); // returns "d"
echo $rest."<br />";
*/
// 65. trim
/*$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);*/
//66. ucfirst
/*$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!
echo $foo."<br />";

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
echo $bar."<br />";
$bar = ucfirst(strtolower($bar)); // Hello world!
echo $bar."<br />";
*/
//67. ucwords
/*$foo = 'hello world!';
$foo = ucwords($foo);             // Hello World!
echo $foo."<br />";

$bar = 'HELLO WORLD!';
$bar = ucwords($bar);             // HELLO WORLD!
echo $bar."<br />";
$bar = ucwords(strtolower($bar)); // Hello World!
echo $bar."<br />";
*/
//68. vprintf
//vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01

//69. vsprintf
//print vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01

//70. wordwrap
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 20, "<br />\n");

echo $newtext;




?>

