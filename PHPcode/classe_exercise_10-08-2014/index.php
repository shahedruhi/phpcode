<!DOCTYPE html>

<head>

</head>
 
<body>

<h3>FTFL STUDENT INSERT FORM</h3>


<form action="data_insert.php" method="POST">
	<fieldset>
		<legend>FTFL Batch</legend>
		<br>
		<br>
		
		<label>
			<span>Student Name</span>
			<input type="text" name="student_name"/>
		</label>
		<br>
		<br>

		<label>
			<span>Select Course</span>
			<select name="course_title">
			
			<?php
			$connect = mysql_connect('localhost','root','');
			$db = mysql_select_db('ftfl',$connect);
			$query = "SELECT title from courses";
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result))
			{
				echo "<option value=".$row['title'].">".$row['title']."</option>";
			}
			?>

			</select>


		</label>
		<br>
		<br>

		<label>
			<input type="submit" value="Submit"/>
		</label>
	</fieldset>	

</form>
 
<label>
<span><a href="course_input.html">course</span></a>
</label>
<br>
<br>
<label>
<span><a href="select_course.html">select course</span></a>
</label>

 
</body>
</html>