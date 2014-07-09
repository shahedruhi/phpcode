

<?php

/*array_change_key_case
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
*/

//array_chunk
//$input_array = array('a', 'b', 'c', 'd', 'e');
//print_r(array_chunk($input_array, 2));
//print_r(array_chunk($input_array, 2, true));

//array_column
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
//array_combine
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

?>

