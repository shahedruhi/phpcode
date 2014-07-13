
<html>
<head>
	<title>OOP Learning</title>
</head>
<body>
	<form action = "oop1.php" method = "GET">
		<input type = 'text' name = 'idText'> <br />
		<input type = 'text' name = 'nameText'> <br />
		<input type = 'text' name = 'salaryText'> <br />
		<input type = "submit" name = 'submitButtion'> <br />
	</form>	
	<?php
		if(isset($_GET['submitButtion']))
		{
			$id = $_GET['idText'];
			$name = $_GET['nameText'];
			$salary = $_GET['salaryText'];
			echo $id. ' '. $name. ' '. $salary;
		}
	?>

</body>
</html>	
