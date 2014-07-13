
<html>
<head>
	<title>OOP Learning</title>
</head>
<body>
	<form action = "oop1.php" method = "POST">
		<input type = 'text' name = 'idText'> <br />
		<input type = 'text' name = 'nameText'> <br />
		<input type = 'text' name = 'salaryText'> <br />
		<input type = "submit" name = 'submitButtion'> <br />
	</form>	
	<?php
		if(isset($_POST['submitButtion']))
		{
			$id = $_POST['idText'];
			$name = $_POST['nameText'];
			$salary = $_POST['salaryText'];
			echo $id. ' '. $name. ' '. $salary;
		}
	?>

</body>
</html>	
