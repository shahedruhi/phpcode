<?php
$id = $_GET["id"];
mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');

if(mysql_query("DELETE from student_info WHERE id=$id")){
	header('location: data.php?msg=delete');
}

?>
