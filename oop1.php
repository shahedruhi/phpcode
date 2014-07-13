
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
		require 'employee.php'; 
		if(isset($_GET['submitButtion']))
		{
			$employeeObj = new Employee ();
			$employeeObj->id = $_GET['idText'];
			$employeeObj->name = $_GET['nameText'];
			$employeeObj->salary = $_GET['salaryText'];

			echo $employeeObj->id. ' '. $employeeObj->name. ' '. $employeeObj->salary;
		}
	?>

</body>
</html>	
