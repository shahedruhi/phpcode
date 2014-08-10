<?php

//echo $_POST['batch_name'];
//$student_id = $_POST['student_id'];
$student_name = $_POST['student_name'];

/*if(strlen($batch) == 0){
	error_log("Someone try to input empty on batch",3, "temp/error.log");
}

if (strlen($batch) < 4)
{
	header('location:add_batch.php?len=short');
}
elseif (strlen($batch) > 7) 
{
	header('location:add_batch.php?len=long');
}


$n_batch = str_replace(array('(',')','{','}','[',']'), '', $batch);
*/

mysql_connect('localhost','root','');

mysql_select_db('ftfl');

mysql_query("INSERT into new_students (name) values ('$student_name')");


echo "Data has sucessfully inserted.<br />";


?>