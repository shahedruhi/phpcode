<?php


$student_name = $_POST['student_name'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

mysql_query("INSERT into new_students (name) values ('$student_name')");

echo "Data has sucessfully inserted.<br />";


?>