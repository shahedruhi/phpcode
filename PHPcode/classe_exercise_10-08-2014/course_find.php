<?php


$student_name = $_POST['student_name'];


mysql_connect('localhost','root','');

mysql_select_db('ftfl');

$query = "SELECT courses.title 
			from courses
			INNER JOIN map_students_courses
			ON map_students_courses.course_id = courses.id
			INNER JOIN new_students 
			ON map_students_courses.student_id = new_students.id 
			where new_students.name = '$student_name'  
			";			
	 
$result = mysql_query($query);

echo '<select name="bname" multiple>';
	while ($row = mysql_fetch_assoc($result)) 
	{
	    echo "<option value='" . $row['title'] ."'>" . $row['title'] ."</option>";
	}
echo '</select>';

?>