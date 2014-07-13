
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
		require 'officeemployee.php'; 
		if(isset($_GET['submitButtion']))
		{
			$an_employee = new OfficeEmployee ();
			$an_employee->id = $_GET['idText'];
			$an_employee->name = $_GET['nameText'];
			$an_employee->salary = $_GET['salaryText'];

			echo $an_employee->id. ' '. $an_employee->name. ' '. $an_employee->salary;
		}
	?>

</body>
</html>	
