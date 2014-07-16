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


mysql_connect('localhost','root','');

mysql_select_db('ftfl_info');

mysql_query("INSERT into student_info (batch) values ('$n_batch')");

/*$qury = mysql_query("SELECT * from student_info");

echo "<table border='1'>";
while ($data = mysql_fetch_object($qury)) {
	//echo "<tr><td>";
	//echo $data->batch;
	//echo "</tr></td>";
	echo "<tr>";
	echo "<td>".$data->batch."</td>";
	echo "<td><a href='view.php?id=".$data->id."'>View</a></td>";
	echo "<td><a href='edit.php?id=".$data->id."'>Edit</a></td>";
	echo "<td><a href='delete.php?id=".$data->id."'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
*/
echo "Batch has sucessfully inserted.<br />";
echo "Inserted Batch: ".$n_batch."<br />";
echo "<td><a href='crud.php'>Back to Insert Page</a></td>";


?>