<?php


$course_title = $_POST['course_title'];
$course_code = $_POST['course_code'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

mysql_query("INSERT into courses (title,code) values ('$course_title','$course_code')");


echo "Data has sucessfully inserted.<br />";


?>