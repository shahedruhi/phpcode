<?php

//echo $_POST['batch_name'];
$course_title = $_POST['course_title'];
$course_code = $_POST['course_code'];

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

mysql_query("INSERT into courses (title,code) values ('$course_title','$course_code')");


echo "Data has sucessfully inserted.<br />";


?>