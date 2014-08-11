<?php
/*
$student_name = $_POST['student_name'];
//$course_title = $_POST['course_title'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

mysql_query("INSERT into students (name) values ('$student_name')");

$student_query = mysql_query("SELECT id from students where name = '$student_name'");

$student_id = mysql_fetch_array($student_query);

$input_student_id = $student[id];

foreach($_POST['course_title'] as $course_title)
{
//$result = mysql_query("select id from courses where title = '$course_title'");
//$course_id = mysql_fetch_array($result);
//$b = $course_id['c_id'];
$course_query = mysql_query("SELECT id from courses where title = '$course_title'");
$course_id = mysql_fetch_array($course_query);
$input_course_id = $course_id[id];

//$query = "insert into mapping (student_id,course_id) values ('$a','$b')";
$insert_check = mysql_query("INSERT into map_students_courses (student_id,course_id) values ('$input_student_id','$input_course_id')");
//$result = mysql_query($query) or die("Error");
}

//$course_query = mysql_query("SELECT id from courses where title = '$course_title'");

//$course_id = mysql_fetch_object($course_query);

//
//$input_course_id = $course_id->id;



//$insert_check = mysql_query("INSERT into map_students_courses (student_id,course_id) values ('$input_student_id','$input_course_id')");

if($insert_check)
{
	echo "Data inserted";
}	
else
{
	echo "Error";
}
*/

$student_name = $_POST['student_name'];
mysql_connect('localhost','root','');
mysql_select_db('ftfl');
mysql_query("insert into students (name) values ('$student_name')");

$result = mysql_query("select id from students where name = '$student_name' ");
$student_id = mysql_fetch_array($result);
$input_student_id = $student_id['id'];

foreach($_POST['course_title'] as $course_title)
{

	$result = mysql_query("select id from courses where title = '$course_title' ");
	$course_id = mysql_fetch_array($result);
	$input_course_id = $course_id['id'];
	$query = "insert into map_students_courses (student_id,course_id) values ('$input_student_id','$input_course_id')";
	$result = mysql_query($query);
}

if($result)
{
echo "Data inserted, thank you<br/>";
}
else
{
echo "Error<br/>";
}
?>


