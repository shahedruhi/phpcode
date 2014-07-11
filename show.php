<?php

//echo $_POST['batch_name'];
$batch = $_POST['batch_name'];
echo $batch;
mysql_connect('localhost','root','');

mysql_select_db('ftfl_info');

mysql_query("INSERT into student_info (batch) values ('$batch')");

?>