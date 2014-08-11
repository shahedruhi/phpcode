<?php


$student_name = $_POST['student_name'];
$course_title = $_POST['course_title'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

mysql_query("INSERT into students (name) values ('$student_name')");


$student_query = mysql_query("SELECT id from students where name = '$student_name'");

$student_id = mysql_fetch_object($student_query);

$course_query = mysql_query("SELECT id from courses where title = '$course_title'");

$course_id = mysql_fetch_object($course_query);

$input_student_id = $student_id->id;
$input_course_id = $course_id->id;



$data = mysql_query("INSERT into map_students_courses (student_id,course_id) values ('$input_student_id','$input_course_id')");

if($data)
{
	echo "Data inserted";
}	
else
{
	echo "Error";
}


?>