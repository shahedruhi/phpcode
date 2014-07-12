<?php

//echo $_POST['batch_name'];
$batch = $_POST['batch_name'];

if(strlen($batch) == 0){
	error_log("Someone try to input empty on batch",3, "temp/error.log");
}

if (strlen($batch) < 4)
{
	header('location:add_batch.php?len=short');
}
elseif (strlen($batch) > 7) 
{
	header('location:add_batch.php?len=long');
}

$n_batch = str_replace(array('(',')','{','}','[',']'), '', $batch);
//echo "O".$batch;



mysql_connect('localhost','root','');

mysql_select_db('ftfl_info');

mysql_query("INSERT into student_info (batch) values ('$n_batch')");

$qury = mysql_query("SELECT * from student_info");

echo "<table border='1'>";
while ($data = mysql_fetch_object($qury)) {
	echo "<tr><td>";
	echo $data->batch;
	echo "</tr></td>";
}
echo "</table>";

?>