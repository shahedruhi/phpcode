<?php
$student_name = $_POST['name'];
mysql_connect('localhost','root','');
mysql_select_db('ftfl');
mysql_query("insert into students (name) values ('$student_name')");

$result = mysql_query("select id from students where name = '$student_name' ");
$student_id = mysql_fetch_array($result);
$input_student_id = $student_id['id'];

foreach($_POST['title'] as $course_title)
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
