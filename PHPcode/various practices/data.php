<?php

mysql_connect('localhost','root','');

mysql_select_db('ftfl_info');

$qury = mysql_query("SELECT * from student_info");

echo "<table border='1'>";
while ($data = mysql_fetch_object($qury)) {
	echo "<tr>";
	echo "<td>".$data->batch."</td>";
	echo "<td><a href='view.php?id=".$data->id."'>View</a></td>";
	echo "<td><a href='edit.php?id=".$data->id."'>Edit</a></td>";
	echo "<td><a href='delete.php?id=".$data->id."'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";

echo "<td><a href='crud.php'>Back to Insert Page</a></td>";

?>