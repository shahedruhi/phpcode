

<?php

/*1. array_change_key_case
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
*/

//2. array_chunk
//$input_array = array('a', 'b', 'c', 'd', 'e');
//print_r(array_chunk($input_array, 2));
//print_r(array_chunk($input_array, 2, true));

//3. array_column
// Array representing a possible record set returned from a database
/*$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names); 
*/
//4. array_combine
//$a = array('green', 'red', 'yellow');
//$b = array('avocado', 'apple', 'banana');
//$c = array_combine($a, $b);

//print_r($c);

//5. array_count_values
//$array = array(1, "hello", 1, "world", "hello");
//print_r(array_count_values($array));

//6. array_diff_assoc
//$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "green", "yellow", "red");
//$result = array_diff_assoc($array1, $array2);
//print_r($result);

//7. array_diff_key
//$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
//$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

//var_dump(array_diff_key($array1, $array2));

//8. array_diff_uassoc
/*function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);*/

//9. array_diff_ukey
/*function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));
*/

//10. array_diff
//$array1 = array("a" => "green", "red", "blue", "red");
//$array2 = array("b" => "green", "yellow", "red");
//$result = array_diff($array1, $array2);

//print_r($result);

//11. array_fill_keys
//$keys = array('foo', 5, 10, 'bar');
//$a = array_fill_keys($keys, 'banana');
//print_r($a);

//12. array_fill
//$a = array_fill(5, 6, 'banana');
//$b = array_fill(-2, 4, 'pear');
//print_r($a);
//print_r($b);

//13. array_filter 1
/*function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));
*/

//13. array_filter 2
/*$entry = array(
             0 => 'foo',
             1 => false,
             2 => -1,
             3 => null,
             4 => ''
          );

print_r(array_filter($entry));
*/

//14. array_flip

//$trans = array("a" => 1, "b" => 1, "c" => 2);
//$trans = array_flip($trans);
//print_r($trans);

//15. array_intersect_assoc
//$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
//$result_array = array_intersect_assoc($array1, $array2);
//print_r($result_array);

//16. array_intersect_key
//$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
//$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

//var_dump(array_intersect_key($array1, $array2));

//17. array_intersect_uassoc
//$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

//print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));

//18. array_intersect_ukey
/*function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
*/

//19. array_intersect
/*$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
*/

//20. array_key_exists
//$search_array = array('first' => 1, 'second' => 4);
//if (array_key_exists('first', $search_array)) {
//    echo "The 'first' element is in the array";
//}

//21. array_keys
/*$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));
*/

//22. array_map
/*function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);*/

/*$func = function($value) {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));
*/
/*function show_Spanish($n, $m)
{
    return("The number $n is called $m in Spanish");
}

function map_Spanish($n, $m)
{
    return(array($n => $m));
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);
print_r($c);

$d = array_map("map_Spanish", $a , $b);
print_r($d);
*/

//23. array_merge_recursive
/*$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
*/

//24. array_merge
//$beginning = 'foo';
//$end = array(1 => 'bar');
//$result = array_merge((array)$beginning, (array)$end);
//print_r($result);
//$array1 = array("color" => "red", 2, 4);
//$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
//$result = array_merge($array1, $array2);
//print_r($result);

//25. array_multisort
/*$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);
*/

//26. array_pad
/*$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
// result is array(12, 10, 9, 0, 0)
print_r($result);

$result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)
print_r($result);
$result = array_pad($input, 2, "noop");
// not padded
print_r($result);
*/

//27. array_pop
//$stack = array("orange", "banana", "apple", "raspberry");
//$fruit = array_pop($stack);
//print_r($stack);

//28. array_product
//$a = array(2, 4, 6, 8);
//echo "product(a) = " . array_product($a) . "\n";
//echo "product(array()) = " . array_product(array()) . "\n";

//29. array_push
//$stack = array("orange", "banana");
//array_push($stack, "apple", "raspberry");
//print_r($stack);

//30. array_rand
//$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
//$rand_keys = array_rand($input, 2);
//echo $input[$rand_keys[0]] . "\n";
//echo $input[$rand_keys[1]] . "\n";

/*31. array_reduce
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function multiplication($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "multiplication", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
*/
/*32. array_replace_recursive
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);
*/
/*33. array_replace
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
*/
/*34. array_reverse
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);
*/
/*35. array_search
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key1 = array_search('green', $array); // $key = 2;
$key2 = array_search('red', $array);   // $key = 1;
echo $key1.$key2;
*/
//36. array_shift
//$stack = array("orange", "banana", "apple", "raspberry");
//$fruit = array_shift($stack);
//print_r($stack);

//37. array_slice
/*$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // returns "c", "d", and "e"
print_r($output);
echo "<br >";
$output = array_slice($input, -2, 1);  // returns "d"
print_r($output);
echo "<br >";
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
print_r($output);
echo "<br >";


// note the differences in the array keys
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));
*/
//38. array_splice
/*$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
// $input is now array("red", "green")
print_r($input);
echo "<br >";

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
// $input is now array("red", "yellow")
print_r($input);
echo "<br >";


$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
// $input is now array("red", "orange")
print_r($input);
echo "<br >";

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
// $input is now array("red", "green",
//          "blue", "black", "maroon")
print_r($input);
echo "<br >";

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
// $input is now array("red", "green",
//          "blue", "purple", "yellow");
print_r($input);
echo "<br >";
*/
//39. array_sum
/*$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
*/
//40. array_udiff_assoc
/*class cr {
    private $priv_member;
    function cr($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member)? 1:-1;
    }
}

$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);

$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
print_r($result);
*/
//41. array_udiff_uassoc
/*
class cr {
    private $priv_member;
    function cr($val)
    {
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b)
    {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member)? 1:-1;
    }

    static function comp_func_key($a, $b)
    {
        if ($a === $b) return 0;
        return ($a > $b)? 1:-1;
    }
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);

$result = array_udiff_uassoc($a, $b, array("cr", "comp_func_cr"), array("cr", "comp_func_key"));
print_r($result);
*/

//42.array_udiff

// Arrays to compare
/*$array1 = array(new stdclass, new stdclass,
                new stdclass, new stdclass,
               );

$array2 = array(
                new stdclass, new stdclass,
               );

// Set some properties for each object
$array1[0]->width = 11; $array1[0]->height = 3;
$array1[1]->width = 7;  $array1[1]->height = 1;
$array1[2]->width = 2;  $array1[2]->height = 9;
$array1[3]->width = 5;  $array1[3]->height = 7;

$array2[0]->width = 7;  $array2[0]->height = 5;
$array2[1]->width = 9;  $array2[1]->height = 2;

function compare_by_area($a, $b) {
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;
    
    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB) {
        return 1;
    } else {
        return 0;
    }
}

print_r(array_udiff($array1, $array2, 'compare_by_area'));
*/
//43. array_uintersect_assoc
//$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

//print_r(array_uintersect_assoc($array1, $array2, "strcasecmp"));

//44. array_uintersect_uassoc
/*$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
*/

//45. array_uintersect
/*
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_uintersect($array1, $array2, "strcasecmp"));
*/
//46. array_unique
/*$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
*/
//47. array_unshift
/*$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);
*/
//48. array_values
//$array = array("size" => "XL", "color" => "gold");
//print_r(array_values($array));
//49. array_walk_recursive
/*$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');
*/
//50. array_walk
/*$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');
*/
//51. array
//$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
//print_r($array);

//52. arsort
/* $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}*/
// 53. asort
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}



?>