<?php

//echo $_POST['batch_name'];
$batch = $_POST['batch_name'];
if (strlen($batch) < 4)
{
	header('location:add_batch.php?len=short');
}
elseif (strlen($batch) > 6) 
{
	header('location:add_batch.php?len=long');
}

echo str_replace(array('(',')','{','}','[',']'), '', $batch);
/*echo $batch;
mysql_connect('localhost','root','');

mysql_select_db('ftfl_info');

mysql_query("INSERT into student_info (batch) values ('$batch')");
*/
?>