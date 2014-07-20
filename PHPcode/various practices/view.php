<?php
$id = $_GET["id"];
mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');

$qury = mysql_query("SELECT * from student_info WHERE id=$id");

echo "<table border='1'>";
$data = mysql_fetch_object($qury);
	echo "<tr>";
	echo "<td>".$data->id."</td>";
	echo "<td>".$data->batch."</td>";
	echo "</tr>";

echo "</table>";

?>
