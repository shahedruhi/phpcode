<?php
$id = $_GET["id"];
mysql_connect('localhost','root','');
mysql_select_db('ftfl_info');

$qury = mysql_query("SELECT * from student_info WHERE id=$id");

$data = mysql_fetch_object($qury);

if(isset($_POST["batch_name"])){
	$batch = $_POST["batch_name"];

	mysql_query("UPDATE student_info SET batch='$batch' WHERE id=$id");
	header('location: data.php?msg=edit');
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>FTFL Batch=HTML Form</title>
</head>
<body>
	<form action="" method="POST">
	<fieldset>
		<legend>FTFL Batch</legend>
		<label>
			<span>Batch Name</span>
			<input type="text" name="batch_name" value="<?php echo $data->batch; ?>" />
		</label>
		<label>
			<input type="submit" value="Submit"/>
		</label>
	</fieldset>		
	</form>
</body>
</html>	
