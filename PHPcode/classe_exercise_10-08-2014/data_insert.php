<?php


//$student_name = $_POST['student_name'];
//$course_title = $_POST['course_title'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

//mysql_query("INSERT into students (name) values ('$student_name')");


//$student_query = mysql_query("SELECT id from students where name = '$student_name'");

//$student_id = mysql_fetch_object($student_query);

$choice = array();

foreach($_POST['course_title'] as $course_title) 
	{
        $choice[] = mysql_real_escape_string($course_title);
    }
    
$choice1 = implode(',',$choice);

echo $choice1;

//mysql_query("insert into tb values('','$choice1')");

//$course_query = mysql_query("SELECT id from courses where title = '$course_title'");

//$course_id = mysql_fetch_object($course_query);

//$input_student_id = $student_id->id;
//$input_course_id = $course_id->id;



/*$insert_check = mysql_query("INSERT into map_students_courses (student_id,course_id) values ('$input_student_id','$input_course_id')");

if($insert_check)
{
	echo "Data inserted";
}	
else
{
	echo "Error";
}
*/

?>