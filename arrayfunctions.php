

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
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));

?>

