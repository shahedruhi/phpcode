

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
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);



?>

